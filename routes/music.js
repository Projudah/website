var express = require('express');
var router = express.Router();
var async = require('async')
require('isomorphic-fetch'); // or another library of choice.
var Dropbox = require('dropbox').Dropbox;
var request = require('request');
var dbx = new Dropbox({ accessToken: 'g5mN7FJWjWcAAAAAAAAB-UR269yEvz6MOO-Wrsc6U4fSXfRxKg_sJOZehsNpFMTQ' });



/* GET home page. */
router.get('/', function(req, res, next) {
	getParams(function(resp,arts){
		console.log("LIST COMPLETE...")
		getLiked(function(list){
			res.render('music',{query: req.query, allsongs: resp, liked:list, arts: arts});
		})
	})
});

function getLiked(callback){
	console.log("getting liked songs...")
	dbx.filesGetTemporaryLink({path: '/music/liked.txt'})
	.then(function(response){
		request.get(response.link, function (error, response, body) {
			if (!error && response.statusCode == 200) {
				console.log('liked gotten');
				var likedlist = JSON.parse(body);
				callback(likedlist)
			}
		});
	})
	.catch(function(error) {
		console.error(error);
	});;
}

function getParams(callback){//add callback!!!
	console.log("starting...")
	dbx.filesGetTemporaryLink({path: '/music/songlist.txt'})
	.then(function(response){
		console.log('link is gotten...')
		request.get(response.link, function (error, response, body) {
			if (!error && response.statusCode == 200) {
				console.log('contents is gootten saved lib');
				var songlist = JSON.parse(body);
				if(songlist.date == null){
					console.log('songlist.date is null, calling Getlist')
					var thisdate = new Date().getHours()
					getlist(thisdate, function(list,arts){
						console.log('Get list done, list is: '+list);
						callback(list,arts)
					})
				}else{
					console.log('songlist.date is not null its: '+songlist.date);
					var thisdate = new Date().getHours()
					var diff = thisdate - songlist.date
					if(diff < 0){
						diff = 24-diff
					}
					if(diff > 3){
						console.log('calling getlist diff is > 3, it is: '+diff);
						getlist(thisdate,function(list,arts){
							console.log('Get list done, list is: '+list);
							callback(list,arts)
						})
					}else{
						console.log('no need, diff is < 3, it is: '+diff);
						console.log(songlist.arts)
						callback(songlist.values,songlist.arts)
					}
				}
			}
		});
	})
	.catch(function(error) {
		console.error(error);
	});;
}
function getlist(thisdate,callback){
	var allsongs ={}
	var albarts = {}
	console.log('getlist starting ...')
	dbx.filesListFolder({path: '/music'})
	.then(function(response) { //list of all albums
		console.log('getting list of files, starting async...')
		async.each(response.entries,
		function(item,callback2){
			albarts[item.name] = ""
			console.log('Starting... async item: '+item.name)
			if(item['.tag'] == 'folder'){
				console.log('this is a folder')
				var album = {}
				dbx.filesListFolder({path: '/music/'+item.name})
				.then(function(response){ //list of songs in an album
					console.log(item.name+' contains: '+response.entries);
					console.log('getting links...')
					async.each(response.entries,
					function(item3,callback3){
						console.log('getting link for: '+item3.name)
						dbx.filesGetTemporaryLink({path: '/music/'+item.name+"/"+item3.name})
						.then(function(response){
							if(item3['name'] == 'thumb.jpg'){
								albarts[item.name] = response.link
								console.log(item3)
								callback3()
							}else{
								var temp = {}
								temp['name'] = item3.name;
								temp['id'] = item3.id;
								temp['link'] = response.link
								var songname = item3.name.substring(0, item3.name.lastIndexOf('.'))
								album[songname] = temp;
								callback3()

							}					
						})
						.catch(function(error) {
							console.error(error);
						});;
					},function(err){
						console.log('async links getting is done')
						allsongs[item.name]=album
						callback2();
					});

				}).catch(function(error) {
					console.error(error);
				});;
			}else{
				console.log(item.name+' is NOT a folder')
				callback2()
			}
		},function(err){
			console.log('async done, allsongs is now: '+allsongs);
			console.log(albarts)
			var newsonglist = {}
			newsonglist['date'] = thisdate
			newsonglist['values'] = allsongs
			newsonglist['arts'] = albarts
			var liststring = JSON.stringify(newsonglist)
			dbx.filesDelete({path: '/music/songlist.txt'}).then(function(){
				dbx.filesUpload({contents: liststring, path: '/music/songlist.txt'}).then(function(){
					console.log('callbacking, uploading file, liststring')
					callback(allsongs,albarts)
				}).catch(function(error) {
					console.error(error);
				});;
			}).catch(function(error) {
				console.error(error);
			});;
		});
	}).catch(function(error) {
		console.error(error);
	});;
}
module.exports = router;
