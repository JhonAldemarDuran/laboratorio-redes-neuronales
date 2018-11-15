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



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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


            #barra{

	       width: 364px;
            height: 50px;
            margin-right: 1px;
            padding: 1px 0px 0px 0px;


             }
            #funci_trans ul{
            margin-top: 0;
            line-height:150%;
            font-size: 1.3em;

            }

            #summary{
            margin-top: 0;
            line-height:150%;
            font-size: 1.5em;

            }
            #teoria {
            width: 620px;
            margin: 0 auto;
            padding: 0px 0px 0px 40px;


            }

            #A {
                padding: 2r0px 0px;
            }

            #B {
            }


 </style>
 </head>
    <body>
       <nav id="menu">

	   </nav>
	<div id="header">
				<div class="container">

					<!-- Logo -->
						<h1><a href="#" id="logo">DOCUMENTACIÓN</a></h1>

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

	<div id="barra">
				<ul>
					<details>
						<summary id="summary">Contenido</summary>
								<li><a href="#rna">Redes neuronales artificiales</a></li>
								<ul id="Contenido">
									<li><a href="#que_es_rna">Qué es una Red Neuronal Artificial</a></li>
									<li><a href="#elementos">Elementos que componene una red nauronal</a></li>
									<ul>
											<li><a href="#uni_proce">Unidad de procesos</a></li>
											<li><a href="#estado_act">Estado de activación</a></li>
											<li><a href="#funci_trans">Función de transferencia</a></li>
											<li><a href="#conexion_neuro">Conecciones entre neuronas</a></li>
									</ul>
									<li><a href="#arquitectura">Arquitectura</a></li>
								</ul>

					<li><a href="#internet">Internet de las cosas</a></li>
						<ul>
							<li><a href="#que_es_iot">Qué es el internet de las cosas</a></li>
							<li><a href="#conceptos">Conceptos importantes del IoT</a></li>
							<ul>
								<li><a href="#personas">Persona</a></li>
								<li><a href="#procesos">Procesos</a></li>
								<li><a href="#datos">Datos</a></li>
								<li><a href="#objetos">Objetos</a></li>
							</ul>
						</ul>


					</details>
				</ul>
	</div>
        <div id="teoria">
			<div id="A">
				<div id="B">
						<h3 id="rna">Redes Neuronales Artificiales</h3>
						<h3 id="que_es_rna">Qué es una Red Neuronal Artificial</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>Una red neuronal articial consiste en la interconexión de elementos generalmente acondicionados
							y con una estructura específica, las cuales interaccionan con objetos del mundo real
							y cuyo objetivo es tratar de modelar la información como el sistema nervioso biológico</p>
						<h3 id="elementos">Elementos que componene una red nauronal</h3>
						<h3 id="uni_proce">Unidad de procesos</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>El trabajo que realiza una neurona es único y básico. Este consiste en recepcionar las entradas
							de las neuronas vecinas y calcular un valor de salida, el cual es enviado a todas lasneuronas restantes.
							En los sistemas que se modelen, se puede de forma sencilla caracterizar
							tres tipos de unidades: entradas, salidas y ocultas. Las unidades de entrada son las encargadas
							de recibir las señales del dominio, que a su vez son las entradas de la red. Las señales
							que ingresan a estas unidades de entrada, pueden ser señales externas. Las unidades de salida
							hacen referencia directamente a las señales de salida sistema, es decir, estas unidades se
							encargan de enviar la señal fuera del sistema. Las unidades ocultas son aquellas en las cuales
							sus entradas y salidas se encuentran dentro de los sistemas, es decir, no tiene ningún tipo de
							contacto con el exterior.</p>
						<img src="images/neurona.jpg" alt="">
						<p>Es necesario aclarar que, el conjunto de unidades (neuronas) que tienen en común una misma
								fuente como entrada y que sus salidas están dirigidas a un mismo destino, se conoce como
								capa o nivel.</p>
						<h3 id="estado_act">Estado de activación</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>El estado de activación de un conjunto de unidades está representado por un vector de N
								números reales A(t), como se observa en la ecuación, donde se tiene que:</p>
						<p>A(t) = (a1(t); a2(t), ... , ai(t); ... , aN(t))</p>
						<p>Todas las neuronas que hacen parte de la red, se encuentran en cierto estado. Para simplicar
							el concepto de activación, en el sistema se hablan de dos estados en reposo y excitado,
								los cuales se denominan estados de activación, además que, cada uno de estos estados tiene
								asociado un valor. Los valores de activación o bien pueden ser discreto o continuos. Si estos
								valores son discretos, llegan a tomar un grupo de valores que en general son binarios. Ahora
								bien, se tiene que para un estado esté activo su valor deberá ser 1, en cuanto al 0, éste
								indicará que la neurona está en reposo.</p>
						<h3 id="funci_trans">Función de transferencia</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>Todas la unidades dentro de la red neuronal están conectadas entres sí, para cada una de
								estas unidades Ui existe una función de salida fi(ai(t)), haciendo que el estado de activación
								ai(t) se modique de forma tal que, éste sea una señal de salida Yi(t). Ahora bien para todas
								las salidas de las unidades en un instante de tiempo determinado t, se tiene que:</p>
						<p>Y (t) = f1(a1(t)), f2(a2(t)), ..., fi(ai(t)), ..., fN(aN(t))</p>
						<p>Dentro de estas funciones, se encuentran 4 funciones que son generalmente las más utilizadas,
								con las cuales se determinan diferentes tipos de neuronas, estas funciones son:</p>

							<ul>
								<li>Función escalón</li>
								<li>Función lineal y mixta</li>
								<li>Función Sigmoidal</li>
								<li>Funcion gaussiana</li>
							</ul>

						<p>Cuando se presentan salidas en la red binarias se utiliza la función escalón. Para obtener
							una salida de una neurona es necesario superar o igualar cierto valor umbral. El equivalente
							a no suministrar una función de salida es utilizar la función lineal, la cual es empleada en
							muy pocas ocasiones. En el caso que se desee contar con una salida analógica en la neurona
							se hará uso de las funciones mixta y sigmoidal.</p>
						<h3 id="conexion_neuro">Conecciones entre neuronas</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>Los enlaces o conexiones que se presentan en una red neuronal articial tienen asociado un
							peso, el cual brinda a la neurona la capacidad de adquirir conocimiento. Considerando la
							neurona "i" en un instante de tiempo, con y como la representación de sus datos de salida.
							Una neurona constantemente está en comunicación con las demás neuronas a las que se
							encuentra conectada, para saber su estado de activación. A La conexión entre la neurona
							"i" y la neurona "j" se le es asociado un peso "Wij" .Generalmente se considera que el efecto
							de cada señal es aditivo, de manera tal, que la entrada pura que recibe una neurona es la
							suma del producto de cada señal individual por el valor de la conexión entre ambas neuronas.</p>
						<p>Para establecer la influuencia que tiene la neurona "j" sobre la neurona "i" se utiliza una matriz
							"W" con todos los pesos "Wji". De esta manera hay tres tipos de interacción entre las neuronas
							y se determina según el valor de "wji". En el caso que wji = 0 se supone que no hay un enlace
							establecido entre las neuronas. Si wji > 0 indica que la conexion es excitadora, es decir, que
							siempre que la neurona "i" esté activada la neurona "j" recibirá un dato que la hará propensa a
							la activación. Finalmente, si wji es menor a 0 será un tipo de conexión inhibidora, en la cual si "i" se
							encuentra activada "j" recibirá una señal la cual la hará propensa a la desactivación.</p>
						<h3 id="arquitectura">Arquitectura</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>La arquitectura de una red neuronal es la organización o conguración de conexión con
							la que se disponen. En una red neuronal los nodos tiene una conexión sináptica, donde la
							estructura de dichas conexiones dene la estructura de la red. La información entre nodos
							solo se da en un sentido, es decir, las conexiones sinápticas son direccionales. En general, las
							neuronas se agrupan de manera estructurada a lo cual se le denominan capas. Cuando la
							totalidad de las neuronas de una capa se agrupan forman grupos neuronales. De tal manera
							que el conjunto de una o máss capas constituye una red neuronal.
							En la constitución de una red neuronal cuenta con tres tipos de capas, las cuales son: de
							entrada, de salida y oculta. La conformación de una capa de entrada se compone por neuronas
							con la capacidad de recibir la información procedente de un determinado entorno como
							por ejemplo un sensor. Ahora bien, una capa de salida es la conformada por las neuronas
							encargadas de generar una respuesta al estímulo generado en la red. Finalmente, una capa
							oculta es aquella que no posee un enlace directo con el entorno. Dicha genera grados de
							libertad adicionales a la red.</p>
						<img src="images/redneuronal.jpg" alt="">
						<h3 id="internet">Internet de las cosas</h3>
						<h3 id="que_es_iot">Qué es el internet de las cosas</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>El internet de las cosas es una tecnología basada en el internet global que permite la interconexión de
							 objetos y sistemas de monitoreo. Los cuales comparten información en tiemporeal la cual permita ser
							  fácilmente interpretable.
							Como se mencionó anteriormente el IoT es la conexión de las personas, procesos, datos y
							objetos. La información compartida en estas conexiones tiene como resultado una mejor capacidad
							y experiencias económicas como sociales.</p>
						<h3 id="personas">Personas</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>Sin lugar a dudas uno de los componentes más importantes a la hora de hablar del IoT es la
							necesidad que presentan los usuarios de establecer comunicaciones con objetos o personas.
							La mayoría de estos se conectan a internet a través de dispositivos como: computadores,
							celulares, tablets, etc. Es por esto que dichos usuarios son un factor primordial en esta tecnología,
							ya que, a medida que el IoT evoluciona aparecerán nuevos tipos de conexiones, que
							facilitarán el acceso a internet y presentarán mejoras en el sistema.</p>
						<h3 id="procesos">Procesos</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>Los procesos se conocen como todo lo que pasa dentro de la conexión, si los procesos son
							medianamente buenos, las conexiones que se estén realizando adquieren un valor más alto,
							dentro de las demás. Cabe aclarar, que si el proceso es bueno, las conexiones brindaran información
							conable a la persona que lo esté realizando además que lo hará de la mejor forma.</p>
						<h3 id="datos">Datos</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>Los datos corresponden a la forma de representar la información que es generada por la
							persona o máquinas y procesada por el objeto. Estos datos combinados con un análisis que
							se haga de ellos, no sólo proporcionaría información importante sino que también permitirá la
							toma de decisiones tanto de la persona como de la máquina. Dentro de la industria este proceso
							ayudaría mucho en el mejoramiento de un producto o en la producción de los mismos.</p>
						<h3 id="objetos">Objetos</h3>
						<p><a href="#top">Ir al Contenido</a></p>
						<p>Los objetos, son instrumentos físicos que están conectados a internet. La función de estos
							instrumentos, es poder tomar información y procesarla de forma tal, que sea más fácil para
							el usuario analizarla. Estos también son los encargados de realizar las tareas que sean designadas
							por las personas.Un objeto puede ser representado por cualquier cosa, IoT le
							brinda la capacidad de hacerlo inteligente.</p>


				</div>

			</div>
		</div>
    </body>
</html>
