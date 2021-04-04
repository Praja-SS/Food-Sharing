<?php 
include("dbconnection.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Organic, How it Works?, Our Promise, About Our Farm, Happy Animals, Of Organic Food">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>AddArticle</title>
    <link rel="stylesheet" href="nicepage1.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/food-sharing-donating.jpg"
}</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body"><header class="u-align-center u-clearfix u-header u-header" id="sec-5f00"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-align-left u-image u-logo u-image-1" data-image-width="995" data-image-height="469">
          <img src="images/food-sharing-donating.jpg" class="u-logo-image u-logo-image-1" data-image-width="242.6667">
        </a>
        <h1 class="u-align-center u-custom-font u-font-roboto-slab u-text u-title u-text-1">FOOD SHARING</h1>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="carousel_09ab">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-100 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-expanded-width u-form u-form-1">
                    
      <div class="container">
         
        <header>
					
					<a href="#"><i class="material-icons green-text right">people</i><span><?php
						if(basename($_SERVER['PHP_SELF']) == "displayarticles.php")
						{
							if($_GET[articletype] == "Blog" )
                          	{
							echo ' class="active"';
							}
						}
						?><a href="displayarticles.php?articletype=Blog"><h3 class=" u-text-palette-2-base ">View Articles</h3></span></a> 
				</header>
              
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7f8c"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">The New Everyday Revolution<br>Copyright © 2021 Food Sharing<br>
        </p>
      </div></footer>
  </body>
</html>