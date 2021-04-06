<?php 
include("fa1.php");
?>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Organic, How it Works?, Our Promise, About Our Farm, Happy Animals, Of Organic Food">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>faq</title>
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

   
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
    
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
	<style>
p {
	
   /* margin: 0 auto; */
    text-align: left;
    text-indent: 15em;
    /* right: 20px; */
    margin-left: 65px;
    margin-right: 75px;
}
div.container1 {
    width:98%; 
    margin:1%;
  }
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
  margin-left:15%; 
   margin-right:15%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}


}   
  </style>
</head>

<body>
  
 
<body class="u-body"><header class="u-align-center u-clearfix u-header u-header" id="sec-5f00"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-align-left u-image u-logo u-image-1" data-image-width="995" data-image-height="469">
          <img src="images/food-sharing-donating.jpg" class="u-logo-image u-logo-image-1" data-image-width="242.6667">
        </a>
        <h1 class="u-align-center u-custom-font u-font-roboto-slab u-text u-title u-text-1">FOOD SHARING</h1>
      </div></header> 
	  <div id="page-container">
  <div class="content">
      <div id="content-wrap">
        <!-- all other page-content -->
      <h4 style="text-align:center;"><strong>Users</strong></h4>
      <div class="container">
         
        <div class="row">
          <div class="col l4 s12"></div>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header u-text-palette-2-base text-darken-1">1.Restaurant</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM register where type='Restaurant'";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>Restaurant</th>
										<th>Email</th>
										<th>City</th>
										<th>Phone</th>
										
										
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[name]."</td>";
								  echo "<td>".$rs[mail]."</td>";
								  echo "<td>".$rs[city]."</td>";
								  echo "<td>".$rs[phone]."</td>";
								  

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li>
			  <li><div class="collapsible-header u-text-palette-2-base text-darken-1">1.NGOs</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM register where type='NGO'";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>NGO</th>
										<th>Email</th>
										<th>City</th>
										<th>Phone</th>
										
										
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[name]."</td>";
								  echo "<td>".$rs[mail]."</td>";
								  echo "<td>".$rs[city]."</td>";
								  echo "<td>".$rs[phone]."</td>";
								  

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li>
			  <li><div class="collapsible-header u-text-palette-2-base text-darken-1">3.Logistics</div>
                <div class="collapsible-body"><?php
								if(!isset($_SESSION)) { session_start(); }
								{include("dbconnection.php");

						
							$sql1 = "SELECT * FROM register where type='Logistics'";
							  $qsql1 = mysqli_query($con,$sql1);
							  echo "<table class='center'>
										<tr>
										<th>S.No</th>
										<th>Logistics</th>
										<th>Email</th>
										<th>City</th>
										<th>Phone</th>
										
										
										
										</tr>";
								$cnt=1;
							  while($rs = mysqli_fetch_array($qsql1))
							  {
								  echo "<tr>";
								   echo "<td>".$cnt."</td>";
								  echo "<td>".$rs[name]."</td>";
								  echo "<td>".$rs[mail]."</td>";
								  echo "<td>".$rs[city]."</td>";
								  echo "<td>".$rs[phone]."</td>";
								  

							  

								  echo "</tr>";
								  $cnt=$cnt+1;
							  }
								echo "</table>";
							
								
							  }
								
								
							?>     
                  </div>
              </li>
			  <li>
                
              
            </ul>
          </div>
        </div>  
      </div>    	
      </div>		
		</div>
	
</div>


  </body>
  <script src="js/materialize.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function(){
        let faq_1 = document.querySelector(".collapsible");
        M.Collapsible.init(faq_1,{});
      });
    </script>
  </html>
  
