<!DOCTYPE html>
<html lang="lt">
<head>

<title></title>

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/site.css" rel="stylesheet" type="text/css" />

<link href="/js/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" />

<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic,300,300italic,600,600italic&subset=latin,latin-ext" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Slabo+27px&subset=latin,latin-ext" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Slabo+13px&subset=latin,latin-ext" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<script src="/js/jquery-ui-1.11.4.custom/datepicker-lt.js"></script>
<script src="/js/site.js"></script>

</head>

<body>

<header class="site-header">

	<div class="container-fluid">

		<div class="site-header-inner">
		
			<a href="/" class="site-logo"><span>Darželių informacinė sistema</span></a>
			
			<div class="desktop-nav">
				
				<nav class="desktop-menu">
					<ul>
						<li><a href="/"><span>Tėvams</span></a></li>
						<li class="activated"><a href="/"><span>Paslaugos</span></a></li>
						<li><a href="/index.php?template=naujas-prasymas"><span>Užsisakyti</span></a></li>
						<li><a href="/"><span>Įstaigos</span></a></li>
						<li><a href="/index.php?template=statistine-informacija"><span>Statistika</span></a></li>
						<li><a href="/index.php?template=duk"><span>D.U.K.</span></a></li>
						<li><span><a href="/index.php?template=login" class="btn btn-success">Prisijungti</a></span></li>
					</ul>
				</nav>

			</div>
			
			<div class="mobile-toggle">
				
				<button class="site-burger-icon"><span></span><span></span><span></span></button>
				
			</div>
			
		</div>

	</div>
	
	<div class="mobile-nav">
	
		<div class="mobile-overlay"></div>
		
		<nav class="mobile-menu">
			<ul>
				<li><a href="/index.php?template=homepage"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Į pradžią</span></a></li>
				
				<li class="activated"><a href="/index.php?template=login"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Tėvams</span></a>
					<ul>
						<li><a href="/index.php?template=mano-vaikai"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Mano vaikai eilėje</span></a></li>
						<li><a href="/index.php?template=login"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Lankantys įstaigas vaikai</span></a></li>
						<li class="activated"><a href="/index.php?template=naujas-prasymas"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Naujas prašymas</span></a></li>
					</ul>
				</li>
				
				<li><a href="/"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Paslaugos</span></a></li>
				<li><a href="/index.php?template=naujas-prasymas"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Užsisakyti</span></a></li>
				<li><a href="/"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Įstaigos</span></a></li>
				<li><a href="/index.php?template=statistine-informacija"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> Statistika</span></a></li>
				<li><a href="/index.php?template=duk"><span><i class="fa fa-angle-right"></i><i class="fa fa-angle-down"></i> D.U.K.</span></a></li>
				<li><span><a href="/index.php?template=login" class="btn btn-success">Prisijungti</a></span></li>
			</ul>
		</nav>
		
	</div>

</header>
