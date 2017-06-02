<!DOCTYPE html>
<!-- saved from url=(0043)https://evening-ravine-63347.herokuapp.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>PHP Getting Started on Heroku</title>
<link rel="stylesheet" type="text/css" href="./PHP Getting Started on Heroku_files/bootstrap.min.css">
<script src="./PHP Getting Started on Heroku_files/jquery.min.js.download"></script>
<script type="text/javascript" src="./PHP Getting Started on Heroku_files/bootstrap.min.js.download"></script>
<link rel="stylesheet" type="text/css" href="./PHP Getting Started on Heroku_files/main.css">
</head>

<body>
  <nav class="navbar navbar-default navbar-static-top navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav">
      <li class="active">
        <a href="https://evening-ravine-63347.herokuapp.com/"><span class="glyphicon glyphicon-home"></span> Home</a>
      </li>
      <li>
        <a href="https://devcenter.heroku.com/articles/how-heroku-works"><span class="glyphicon glyphicon-user"></span> How Heroku Works</a>
      </li>
      <li class="dropdown">
        <a href="https://evening-ravine-63347.herokuapp.com/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-info-sign"></span> Getting Started Guides <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-ruby">Getting Started with Ruby on Heroku</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-nodejs">Getting Started with Node on Heroku</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-php">Getting Started with PHP on Heroku</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-python">Getting Started with Python on Heroku</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-java">Getting Started with Java on Heroku</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-go">Getting Started with Go on Heroku</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-clojure">Getting Started with Clojure on Heroku</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-scala">Getting Started with Scala on Heroku</a></li>
            <li class="divider"></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-heroku-and-connect-without-local-dev">Getting Started on Heroku with Heroku Connect</a></li>
            <li><a href="https://devcenter.heroku.com/articles/getting-started-with-jruby">Getting Started with Ruby on Heroku (Microsoft Windows)</a></li>
          </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="navbar-right">
        <a href="https://devcenter.heroku.com/"><span class="glyphicon glyphicon-book"></span> Heroku Dev Center</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="jumbotron text-center">
  <div class="container">
    <a href="https://evening-ravine-63347.herokuapp.com/" class="lang-logo">
      <img src="./PHP Getting Started on Heroku_files/lang-logo.png">
    </a>
    <h1>Getting Started with PHP on Heroku</h1>
    <p>This is a sample PHP application deployed to Heroku. It's a reasonably simple app - but a good foundation for understanding how to get the most out of the Heroku platform.</p>
    <a type="button" class="btn btn-lg btn-default" href="https://devcenter.heroku.com/articles/getting-started-with-php"><span class="glyphicon glyphicon-flash"></span> Getting Started with PHP</a>
    <a type="button" class="btn btn-lg btn-primary" href="https://github.com/heroku/php-getting-started"><span class="glyphicon glyphicon-download"></span> Source on GitHub</a>
  </div>
</div>
<div class="container">
  <div class="alert alert-info text-center" role="alert">
    To deploy your own copy, and learn the fundamentals of the Heroku platform, head over to the <a href="https://devcenter.heroku.com/articles/getting-started-with-php" class="alert-link">Getting Started with PHP on Heroku</a> tutorial.
  </div>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <h3><span class="glyphicon glyphicon-info-sign"></span> How this sample app works</h3>
      <ul>
        <li>This app was deployed to Heroku, either using Git or by using <a href="https://github.com/heroku/php-getting-started">Heroku Button</a> on the repository.</li>

        <li>When Heroku received the source code, it fetched all the dependencies in the <a href="https://github.com/heroku/php-getting-started/blob/master/composer.json">composer.json</a>, creating a deployable slug.</li>
        <li>The platform then spins up a dyno, a lightweight container that provides an isolated environment in which the slug can be mounted and executed.</li>
        <li>You can scale your app, manage it, and deploy over <a href="https://addons.heroku.com/">150 add-on services</a>, from the Dashboard or CLI.</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h3><span class="glyphicon glyphicon-link"></span> Next Steps</h3>
      <ul>
        <li>If you are following the <a href="https://devcenter.heroku.com/articles/getting-started-with-php">Getting Started</a> guide, then please head back to the tutorial and follow the next steps!</li>
        <li>If you deployed this app by deploying the Heroku Button, then in a command line shell, run:</li>
        <ul>
          <li><code>git clone https://github.com/heroku/php-getting-started.git</code> - this will create a local copy of the source code for the app</li>
          <li><code>cd php-getting-started</code> - change directory into the local source code repository</li>
          <li><code>heroku git:remote -a &lt;your-app-name&gt;</code> - associate the Heroku app with the repository</li>
          <li>You'll now be set up to run the app locally, or <a href="https://devcenter.heroku.com/articles/getting-started-with-php#push-local-changes">deploy changes</a> to Heroku</li>
        </ul>
      </ul>
      <h3><span class="glyphicon glyphicon-link"></span> Helpful Links</h3>
      <ul>
        <li><a href="https://www.heroku.com/home">Heroku</a></li>
        <li><a href="https://devcenter.heroku.com/">Heroku Dev Center</a></li>
        <li><a href="https://devcenter.heroku.com/articles/getting-started-with-php">Getting Started with PHP on Heroku</a></li>
        <li><a href="https://devcenter.heroku.com/articles/deploying-php">Deploying PHP Apps on Heroku</a></li>
      </ul>
    </div>
  </div> <!-- row -->
   <div class="alert alert-info text-center" role="alert">
    Please do work through the Getting Started guide, even if you do know how to build such an application.  The guide covers the basics of working with Heroku, and will familiarize you with all the concepts you need in order to build and deploy your own apps.
  </div>
</div>



</body></html>