<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>

			<link rel="stylesheet" href="css/style.css" />
		</noscript>
        <!--<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">-->

        <title>Laboratorio Remoto de redes neuronales</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- Styles -->
        <style>
            html,
        body {
		background: #ffffff;
	}

	body, input, select, textarea {
		color: #555555;
		font-family: 'Raleway', sans-serif;
		font-size: 13pt;
		font-weight: 700;
		line-height: 1.75em;
	}

	a {
		color: #3ac984;
		text-decoration: underline;
	}

		a:hover {
			text-decoration: none;
		}

	strong, b {
		font-weight: 700;
	}

	em, i {
		font-style: italic;
	}

	p, ul, ol, dl, table, blockquote {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		color: inherit;
		font-weight: 1000;
		line-height: 1.75em;
		margin-bottom: 1em;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			text-decoration: none;
		}

	h2 {
		font-size: 7em;
	}

	h2 {
		font-size: 3em;
	}

	h3 {
		font-size: 1.25em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	hr {
		border-top: solid 1px #888888;
		border: 0;
		margin-bottom: 1.5em;
	}

	blockquote {
		border-left: solid 0.5em #888888;
		font-style: italic;
		padding: 1em 0 1em 2em;
	}

	section.special, article.special {
		text-align: center;
	}

	header.major {
		padding-bottom: 4em;
	}

	header h2 {
		margin: 0;
		padding: 0;
		font-size: 2.5em;
		font-weight: 600;
	}

	header .byline {
		font-size: 1.6em;
	}

	footer > :last-child {
		margin-bottom: 0;
	}

	footer.major {
		padding-top: 3em;
	}



/* Header */

	#header {
		background: #333333 url("../images/2.jpg") no-repeat;
		background-size: cover;
		color: #fff;
		padding: 6em 0;
		text-align: center;
		background-position: 0% 65%;
		position: relative;
	}

		#header:before {
			content: '';
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			background: rgba(16, 32, 48, 0.25);
		}

		#header > * {
			position: relative;
			z-index: 1;
		}

	.homepage #header {
		padding: 8em 0;
		background-position: center;
	}

	#logo {
		font-size: 2em;
	}

	#nav > ul {
		margin: 0;
	}

		#nav > ul > li {
			border-radius: 10px 10px 0 0;
			display: inline-block;
			margin-left: 0.5em;
			padding: 0.5em 1.5em;
		}

			#nav > ul > li a {
				color: #FFF;
				text-decoration: none;
				font-size: 1.2em;
			}

			#nav > ul > li:first-child {
				margin-left: 0;
			}

			#nav > ul > li:hover a {
				color: #fff;
			}

			#nav > ul > li.active {
				background: #3ac984;
			}

				#nav > ul > li.active a {
					color: white;
				}

			#nav > ul > li > ul {
				display: none;
			}


        </style>
        </head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
				<div class="container">

					<!-- Logo -->
						<h1><a href="#" id="logo">ZONA PRIVADA</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="{{ url('/')}}">Volver al incio</a></li>
							</ul>
						</nav>


					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">

									</header>

								</section>
							</div>
						</div>

				</div>
			</div>

		<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2>CONTENIDO</h2>
					</header>
					<div class="row no-collapse-1">
						<section class="4u">
							<a href="{{ url('/viewdoc')}}"
                               class="image feature"><img src="images/3.jpg" alt=""></a>
							<p>Escoge una planta para trabajar y conoce su comprotamiento...<a href="{{ url('/viewpr') }}"> IR A LAS PLANTAS</a> </p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/5.jpg" alt=""></a>
							<p>Aprende más e ingresa los parámetros que van a hacer de tu red neuronal la optima para tu planta y tu trabajo...<a href="{{ url('/redes/create') }}"> CREA TU RED NEURONAL</a> </p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/6.jpg" alt=""></a>
							<p>Conoce más acerca de tus plantas y tu redes a través de las redes creadas y de las plantas que has escogido...<a href="{{ url('/reportes') }}"> CONOCER LOS REPORTES</a></p>
						</section>

					</div>
				</section>
			</div>




	</body>
</html>
