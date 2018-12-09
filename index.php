<?php
require_once '/database/config.php';
require_once '/database/default.php';
require_once '/includes/renderingHelper.php';

$dbh = new PDO('mysql:host='.$host.';dbname='.$dbName, $user, $pass);
prepareData($dbh,$dataToDb);

$posts = $dbh->query('SELECT * from about');
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
        Maserati
    </title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" type="image/png" href="images/logo.jpg">
  	<link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/media.css">
    	<!--[if lt IE 9]>
    		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
  </head>
  <body id="app" >
    <header>
      <div class="logo">
        <img src="images/logo.jpg" alt="logo">
      </div>
      
    </header>

    <nav>
      <ul class="nav"> 
        <li>
          <a href="#">
            Home
          </a>
        </li>
        <li>
          <a href="#">
            Virtual Tour
          </a>
        </li>
      </ul>
    </nav>


    <main>
      <img src="images/img.jpg" alt="img">
      <div class="btns">
        <ul>
          <li>
              <button>
                Colours
              </button>
            </li>
            <button>
              Front Light
            </button>
          </li>
          <button>
            Riar  Light
          </button>
        </li>
        <button>
          360 View
        </button>
      </li>
        </ul>
      </div>
    </main>
    <script src="./js/index.js"></script>
  </body>
</html>
