<?php
/*
ray pratidina
203040099
Shift Kamis 8.00 - 9.00
*/
?>

<?php
require 'php/functions.php';
$keyboard = query("SELECT * FROM keyboard")
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c_203040099</title>
    <style>

        body {
            background-color: #01a3a4;
        }
        .container {
            width: 350px;
            padding: 10px;
            font-family: arial;
            border: 2px solid #f7f1e3;
        }
    </style>
</head>
<body>
    <div class="container">
            <?php foreach ($keyboard as $ky) : ?>
                <p class="Name">
                    <a href="php/detail.php?id=<?= $ky['id']?>">
                        <?= $ky["Name"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
    </div>
    <a href="php/login.php">
                <button type=""> Masuk ke halaman admin</button>
    </a>
</body>
</html>-->

<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--css-->
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
    <!-- Nvabar -->
    <body id="#home" class="scrollspy">
        <div class="navbar-fixed">
            <nav class="blue darken-2">
                <div class="container">
              <div class="nav-wrapper">
                <a href="#home" class="brand-logo">GG SHOP</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">

                  <li><a href="php/login.php">Login</a></li>
                </ul>
              </div>
             </div>  
            </nav>
          </div>

         <!-- side nav-->
         <ul class="sidenav" id="mobile-nav">
         <li><a href="php/login.php">Login</a></li>
            
          </ul>
    
    <a href="php/login.php">
          
    </a>


           <!--slider-->
           


           <div class="slider">
            <ul class="slides">
              
              <li>
                <img src="asset/img/bahan.png"> 
                <div class="caption left-align">
                  <h3></h3>
                  <h5 class="light grey-text text-lighten-3"></h5>
    

                  <div class="container">
                  <div class="Justify-content-centerA">
            </div>
            <?php foreach ($keyboard as $ky) : ?>
                <p class="Name">
                    <a href="php/detail.php?id=<?= $ky['id']?>">
                        <?= $ky["Name"] ?>
                    </a>
                </p>
            <?php endforeach; ?>

            </div>
            </div>
            </div>
                


        <!--footer-->

      <footer class="blue darken-2 white-text center">
          <p class="flow-text">GG shop Copyright 2021</p>
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  
  <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
          const sidenav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sidenav)

          const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider, {
            indicators: false,  
            height: 500,
            transition: 600,
            interval: 3000
          })

          const parallax = document.querySelectorAll('.parallax');
          M.Parallax.init(parallax)


          const materialbox = document.querySelectorAll('.materialboxed');
          M.Materialbox.init(materialbox)


          const scroll = document.querySelectorAll('.scrollspy');
          M.ScrollSpy.init(scroll, {
            scrolloffset : 50
          });

      </script>
    </body>
  </html>