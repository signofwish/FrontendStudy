<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>CosmoFarmer</title>
<style type="text/css">
/* BASIC */
body {
	font: 62.5% Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
	padding: 20px;
}


/* NAVIGATION */
#mainNav {
	border-left: 1px dashed #999999;
	margin: 0;
	padding: 0;
	list-style: none;
}

#mainNav li {
	/* float: left; */
	display: inline-block;
	width: 12em;
}

#mainNav a {
	text-decoration: none;
	color: #000000;
	font-size: 1.1em;
	text-transform: uppercase;
	border: 1px dashed #999999;
	border-left: none;
	display: block;
	padding: 7px 5px 7px 30px;
	background: #E7E7E7 url(images/link.png) no-repeat left center;
}

#mainNav a:hover {
	background: #B2F511 url(images/go.png) no-repeat 5px 50%;
	font-weight: bold;
}

/* special formatting for home page link */
a#homeLink {
	background: #E7E7E7 url(images/home.png) no-repeat 5px 52%;
}

/* styles for the "you are here" buttons */
#home #mainNav a#homelink,
#feature #mainNav a#featureLink {
	background: #FFFFFF url(images/bg_here.png) no-repeat 5px 50%;
	padding-right: 15px;
	padding-left: 30px;
	font-weight: bold;
}

#home #mainNav a#homelink:hover,
#feature #mainNav a#featureLink:hover {
	color: #B2F511;
}

/* IE Fixes */

/* force hover on entire width of  link */
* html #mainNav a {
	height: 1px;
}

.preload {
	background-image:url(images/go.png);
	display: none;
}
</style>
    <link rel="stylesheet" href="nav.css"/>
    <link rel="stylesheet" href="main-nav.css"/>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body id="feature">
  <ul id="mainNav">
    <li><a href="#" id="homeLink">Home</a></li><?php
    ?><li><a href="#" id="featureLink">Features</a></li><!--
    --><li><a href="#" id="expertLink">Experts</a></li><!--
    --><li><a href="#" id="quizLink">Quiz</a></li><!--
    --><li><a href="#" id="projectLink">Projects</a></li><!--
    --><li><a href="#" id="horoscopeLink">Horoscopes</a></li>
  </ul>

  <ul class="nav  main-nav">
      <li><a href="#" class="main-nav__a  main-nav__a--home">Home</a></li><?php
      ?><li>
		<a href="#" class="main-nav__a  main-nav__a--active">Features</a>          
		<ul class="main-nav__sub">
			<li><a href="#">Feature 1</a></li>
			<li><a href="#">Feature 2</a></li>
			<li><a href="#">Feature 3</a></li>
			<li><a href="#">Feature 4</a></li>
		</ul>
      </li><!--
    --><li><a href="#" class="main-nav__a">Experts</a></li><!--
    --><li><a href="#" class="main-nav__a">Quiz</a></li><!--
    --><li><a href="#" class="main-nav__a">Projects</a></li><!--
    --><li><a href="#" class="main-nav__a">Horoscopes</a></li>
  </ul>
<div class="preload">&nbsp;</div>
</body>
</html>
