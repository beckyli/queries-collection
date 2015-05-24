<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="muni">
    <title>Spoken and written queries collection</title>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href=" https://www,google.com/speech_api/v1/recognize"
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- semantic UI -->
    <link href="css/semantic.css" rel="stylesheet" type="text/css" />
    <link href="css/button.css" rel="stylesheet" type="text/css" />
    <link href="css/button.min.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!--<script src="js/semantic.js" type="text/javascript"></script>-->

    <link rel="stylesheet" href="css/speech.css">
    <script type="text/javascript" src="js/speech.js"></script>

    <!-- voice record -->
    <script src="https://cdn.webrtc-experiment.com/RecordRTC.js"></script>
    <script src="https://cdn.webrtc-experiment.com/commits.js" async></script>

          <!--   modal -->
      <script src="js/modal.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     </head>
     <body>

    <!-- Static navbar -->
    <div role="navigation" class="navbar navbar-inverse navbar-fixed-top row">
        <div class="col-md-8">
            <?php
                $uri = basename($_SERVER['PHP_SELF']);
            ?>
<!----------------------------------------------------------------------------------------------------------
        logo
---------------------------------------------------------------------------------------------------------->
        <div class="collapse navbar-collapse navbar-left">
                <div class="nav navbar-nav" style="padding-left:20px;">
                    <div class="sw_logo"><img src="imgs/nlogo.png" style="width:50%; height:50%; padding-top: 5px; padding-bottom:9px ;" /></div>
                </div>
        </div>
       </div>
<!----------------------------------------------------------------------------------------------------------
        language
  ---------------------------------------------------------------------------------------------------------->
        <div class="ui menu" style="margin-top: 0">
            <a href="/spoken_written_queries/spoken.php" class="item" style="margin-top: 10px">
                Spoken
            </a>
            <a href="/spoken_written_queries/written.php" class="item" style="margin-top: 10px">
                Written
            </a>
            <a href="/spoken_written_queries/GSA.php" class="item" style="margin-top: 10px">
                GSA
            </a>
            <a href="/spoken_written_queries/search.php" class="item" style="margin-top: 10px">
                Search
            </a>
        </div>
<!----------------------------------------------------------------------------------------------------------
        search
  ---------------------------------------------------------------------------------------------------------->
    </div>

    <div class="">
        <div class="" style="padding-right: 20px">
            <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="navbar-form navbar-right" role="search">

         </div>
    </div>