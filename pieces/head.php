<?php

$root = 'http://localhost/eteam/'; //variabile globale come radice del local host
//$root = 'http://uninacorse-it.stackstaging.com/'; //variabile globale radice del sito effettivo

$faviroot = $root.'docs/assets/favicon';

?>


<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Giovanni Bolla">

    <title>
      
        E &middot Team
      
    </title>



<?php
require('favicon.php');
?>


    
      <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
      <link href="<?= $root; ?>docs/assets/css/toolkit-minimal.css" rel="stylesheet">
      <link href="<?= $root; ?>docs/assets/css/application-minimal.css" rel="stylesheet">
    

    

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
    </style>
  </head>


<body>
  
  
