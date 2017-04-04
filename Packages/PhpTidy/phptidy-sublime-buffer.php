<?php require_once 'php/app.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>SIF</title>
<link rel="stylesheet" href="./js/vendor/tooltip/jquery.tooltip.min.css">
<link rel="stylesheet" href="./js/vendor/custom-select/jquery.custom-select.min.css">
<link rel="stylesheet" href="./js/vendor/infobox/jquery.infobox.css">
<link rel="stylesheet" href="./css/main.min.css?v=<?php echo VERSION; ?>">
<script src="./js/vendor/modernizr.min.js" type="text/javascript"></script>
</head>
<body>

	<main>
		<section id="intro" class="intro full">
			<h2><?php echo __( 'En el principio era la nada' ); ?></h2>
			<a href="#cover" data-toggle="scrollTo" class="scroll-down"><span class="icon-arrow-down"></span></a>
		</section>

		<section id="cover" class="cover">
			<nav class="languages">
				<a href="/?language=spa" <?php echo $language == 'spa' ? 'class="active"' : '' ?>>ES</a>
				<a href="/?language=eng" <?php echo $language == 'eng' ? 'class="active"' : '' ?>>EN</a>
				<a href="/?language=por" <?php echo $language == 'por' ? 'class="active"' : '' ?>>BR</a>
			</nav>
			<h1><a href="/" class="brand"><span>SIF Group</span></a></h1>
			<div class="description">
				<h2><?php echo __( 'Un unico operador, %s una unica calidad', '<br>' ); ?></h2>
				<p><?php echo __( 'Somos un operador logístico internacional %s con 25 años de trayectoria en el mercado.', '<br>' ); ?></p>
			</div>
			<nav class="primary">
				<a href="#services" data-toggle="scrollTo"><?php echo __( 'Servicios' ); ?></a>
				<a href="#industries" data-toggle="scrollTo"><?php echo __( 'Industrias' ); ?></a>
				<a href="#global" data-toggle="scrollTo"><?php echo __( 'Presencia global' ); ?></a>
				<a href="#customers" data-toggle="scrollTo"><?php echo __( 'Clientes' ); ?></a>
				<a href="#about" data-toggle="scrollTo"><?php echo __( 'Quienes somos' ); ?></a>
				<a href="#reason" data-toggle="scrollTo"><?php echo __( 'Razón de ser' ); ?></a>
				<a href="#contact" data-toggle="scrollTo"><?php echo __( 'Contacto' ); ?></a>
			</nav>
		</section>

		<section id="services" class="services">
			<article class="first">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'NUESTROS SERVICIOS' ); ?></h2>
						<div class="list">
							<a href="#" data-toggle="tooltip" data-tooltip="<?php echo __( 'Marítimo/fluvial, aéreo y carretero' ); ?>" data-position="bottom" data-noclick="true"><?php echo __( 'Fletes de Exportación e Importación' ); ?></a>
							<br>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Transporte Maritimo' ); ?></a>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Transporte Terrestre' ); ?></a>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Transporte Aereo' ); ?></a>
							<br>
							<a href="#" data-toggle="tooltip" data-tooltip="<?php echo __( '(Buque-Camión) Recomendado para embarques críticos (time sensitive shipments) enlazando origenes/destinos del Cono Sur de América con el resto del mundo.' ); ?>" data-position="bottom" data-noclick="true"><?php echo __( 'Transporte Multimodal' ); ?></a>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Consolidación y Desconsolidación de Cargas' ); ?></a>
							<br>
							<a href="#" data-toggle="tooltip" data-tooltip="<?php echo __( 'Recolección y entrega tanto en origen como en destino' ); ?>" data-position="bottom" data-noclick="true"><?php echo __( 'Transporte Interno' ); ?></a>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Cargas de Proyectos Especiales / Sobredimensionadas y Extrapesadas' ); ?></a>
							<br>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Emisión de Documentación de Transporte' ); ?></a>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Manejo de Mercancías Peligrosas' ); ?></a>
							<br>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Embarques de perecederos y mercancías con control de temperatura' ); ?></a>
							<a href="#" data-toggle="tooltip" data-tooltip="" data-position="bottom" data-noclick="true"><?php echo __( 'Seguro Internacional de Carga' ); ?></a>
						</div>
						<ul class="icons">
							<li><span class="icon-water"></span></li>
							<li><span class="icon-earth"></span></li>
							<li><span class="icon-air"></span></li>
						</ul>
					</div>
				</div>
			</article>

			<article class="water">
				<div class="main">
					<div class="icon">
						<div class="icon-water-lg"></div>
						<a href="#" class="more blue"><span class="icon-more"></span></a>
					</div>
					<div class="content">
						<h2><?php echo __( 'Marítimo, fluvial' ); ?></h2>
						<p><?php echo __( 'Nuestros conocimientos del transporte marítimo estan fundados en una experiencia de muchos años, coordinamos transportes marítimos y conocemos las particularidades regionales. El equipo de %sSIF GROUP%s va a encontrar la solución adecuada, confiable e innovadora.', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'Trabajamos en estrecha cooperación con las agencias marítimas líderes, asegurando disponibilidad de bodega en todas las rutas, y con las tarifas mas competitivas.' ); ?></p>
					</div>
				</div>
				<div class="detail left">
					<div class="box">
						<a href="#" class="close"><span class="icon-close"></span></a>
						<h3><?php echo __( 'Marítimo, fluvial' ); ?></h3>
						<div class="description">
						</div>
						<a href="#contact" data-toggle="scrollTo" class="btn btn-radius"><?php echo __( 'CONSULTAR' ); ?></a>
					</div>
				</div>
			</article>

			<article class="earth">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'Terrestre' ); ?></h2>
						<p><?php echo __( 'Cuando se trata de transporte terrestre sus embarques estarán en buenas manos a través de %sSIF GROUP%s. Planificamos y coordinamos sus embarques de carga fraccionada o completa en todo el Mercosur. Nuestra gama de servicios incluye también cargas especiales y cargas peligrosas. %sSIF GROUP%s es de los pocos operadores logísticos que se inició en esta modalidad de transportes en el Mercosur. Sabemos lo que hacemos, y trabajamos exclusivamente con proveedores experimentados. Analizamos el equipamiento a utilizar de acuerdo a las características de la carga y cuidamos el cumplimiento de todas las normas de seguridad.', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
					</div>
					<div class="icon">
						<div class="icon-earth-lg"></div>
						<a href="#" class="more orange"><span class="icon-more"></span></a>
					</div>
				</div>
				<div class="detail right">
					<div class="box">
						<a href="#" class="close"><span class="icon-close"></span></a>
						<h3><?php echo __( 'Terrestre' ); ?></h3>
						<div class="description">
						</div>
						<a href="#contact" data-toggle="scrollTo" class="btn btn-radius"><?php echo __( 'CONSULTAR' ); ?></a>
					</div>
				</div>
			</article>

			<article class="air">
				<div class="main">
					<div class="icon">
						<div class="icon-air-lg"></div>
						<a href="#" class="more green"><span class="icon-more"></span></a>
					</div>
					<div class="content">
						<h2><?php echo __( 'Aéreo' ); ?></h2>
						<p><?php echo __( 'Como agencia de carga aérea, nos distinguimos ante todo por nuestra velocidad de respuesta, porque así lo requiere el mercado y porque usted lo espera de ese modo. Ofrecemos opciones innovadoras dando asistencia personalizada con puntos de contacto fijos.' ); ?></p>
						<p><?php echo __( '%sSomos agencia IATA certificada%s, lo que nos dá la posibilidad de usar todas las líneas aéreas, y tener disponibilidad de los mejores costos de mercado. Gerenciamos de forma activa todo el proceso junto a la línea aérea.', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'Nuestra red de agentes a nivel mundial cubre todos los puntos desde o hacia donde tengamos un requerimiento.' ); ?></p>
					</div>
				</div>
				<div class="detail left">
					<div class="box">
						<a href="#" class="close"><span class="icon-close"></span></a>
						<h3><?php echo __( 'Aéreo' ); ?></h3>
						<div class="description">
							<p><?php echo __( 'Transporte aéreo desde y hacia cualquier origen/destino' ) ?></p>
							<p><?php echo __( 'Agencia IATA member (operamos con todas las líneas, y con los mejores costos)' ) ?></p>
							<p><?php echo __( 'Logística integral door/door' ) ?></p>
							<p><?php echo __( 'Especialistas en cargas peligrosas (DGR)' ) ?></p>
							<p><?php echo __( 'Embarques de perecederos, alimentos y medicinas' ) ?></p>
							<p><?php echo __( 'Embarques de animales vivos' ) ?></p>
						</div>
						<a href="#contact" data-toggle="scrollTo" class="btn btn-radius"><?php echo __( 'CONSULTAR' ); ?></a>
					</div>
				</div>
			</article>

			<article class="multimodal">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'Multimodal' ); ?></h2>
						<p><?php echo __( 'La alternativa de transporte multimodal en el cono sur es una solución para sus embarques críticos (time sensitive shipments), o que por la naturaleza de la carga o por la ubicación geográfica de las plantas de origen/destino requieren su entrega y/o retiro sobre camión internacional. ' ); ?></p>
						<p><?php echo __( 'Para brindar este servicio nos apoyamos en nuestra sólida estructura operativa en los principales puertos de la región y en nuestro experimentado departamento de transporte terrestre.' ); ?></p>
					</div>
					<div class="icon">
						<div class="icon-water-earth-air"></div>
						<a href="#" class="more"><span class="icon-more"></span></a>
					</div>
					<ul class="lines">
						<li class="green"></li>
						<li class="blue"></li>
						<li class="orange"></li>
					</ul>
				</div>
				<div class="detail right">
					<div class="box">
						<a href="#" class="close"><span class="icon-close"></span></a>
						<h3><?php echo __( 'Multimodal' ); ?></h3>
						<div class="description">
						</div>
						<a href="#contact" data-toggle="scrollTo" class="btn btn-radius"><?php echo __( 'CONSULTAR' ); ?></a>
					</div>
				</div>
			</article>
		</section><!-- /.services -->

		<section id="industries" class="industries">
			<article class="first">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'SOLUCIONES PARA INDUSTRIAS' ); ?></h2>
						<h2><?php echo __( 'Industria Automotriz' ); ?></h2>
						<p><?php echo __( 'Proveer logística en una cadena de suministro es como administrar una cadena de montaje. %sSIF GROUP%s opera logística para suministro de autopartes de multinacionales de primera línea, somos especialistas en logística JIT.', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'Enfocamos nuestro objetivo no solo en satisfacer las necesidades puntuales del cliente, sino en mejorar procesos, optimizando tiempos y costos.  Ponemos a disposición del cliente todas las opciones de forma transparente, para que pueda tomar decisiones, aprovechar ventajas estratégicas y así ayudarlo a diferenciarse de sus competidores.' ); ?></p>
					</div>
					<div class="icon">
						<div class="icon-industry"></div>
					</div>
				</div>
				<a href="#industries_list" data-toggle="scrollTo" class="scroll-down"><span class="icon-arrow-down"></span></a>
			</article>
			<article class="list" id="industries_list">
				<ul>
					<li>
						<div class="icon"><span class="icon-industry-1"></span></div>
						<h2><?php echo __( 'Industria farmacéutica y artículos para el cuidado de la salud' ); ?></h2>
						<p><?php echo __( 'Las empresas de este rubro requieren un enfoque operacional de mejora continua, revisión de procesos y que los tiempos de entrega se cumplan de forma rigurosa.  El cliente necesita que sus productos sean entregados en los tiempos pre-establecidos y cuidando que los requerimientos de conservación del producto sean rigurosamente cumplidos.' ); ?></p>
						<p><?php echo __( '%sSIF GROUP%s lleva muchos años trabajando para esta exigente industria. Podemos comprometernos a superar sus expectativas, alta productividad, velocidad y fiabilidad de los procesos. Para que usted pueda centrarse en su negocio, %sSIF GROUP%s le dará un amplio panorama de opciones de trabajo. Confíe en el buen criterio de un especialista, así como usted confía en su médico.', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
					</li>
					<li>
						<div class="icon"><span class="icon-industry-2"></span></div>
						<h2><?php echo __( 'Industria Hi-tech, electrónica y telecomunicaciones' ); ?></h2>
						<p><?php echo __( 'Proveemos soluciones logísticas para alta tecnología, a costos acordes.' ); ?></p>
						<p><?php echo __( 'Las empresas de la industria HI-TECH y tecnología están en constante evolución y trabajan para entregar mejores productos, en plazos cada vez más cortos.  Acompañamos esta filosofía de trabajo y proveemos soluciones especialmente adaptadas para esta volátil industria. %sSIF GROUP%s posee una RED GLOBAL altamente especializada y a la altura de prestar eficientes servicios sea donde fuere su necesidad.  Sabemos que los productos de IT se han convertido en un perecedero, por lo que nuestra respuesta es acorde a ese punto fundamental.', '<strong>', '</strong>' ); ?></p>
					</li>
				</ul>
				<ul>
					<li>
						<div class="icon"><span class="icon-industry-3"></span></div>
						<h2><?php echo __( 'Minoristas y artículos de consumo' ); ?></h2>
						<p><?php echo __( '%sSIF GROUP%s provee servicios logísticos valorados por nuestros clientes en los diferentes segmentos de esta industria tan segmentada y variada.', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'Proveemos servicios door/door, previsibles y de costos competitivos, que ayudan a que sus productos lleguen a su mercado en las fechas requeridas y con costos competitivos mediante eficacia en la gestión de proveedores.' ); ?></p>
						<p><?php echo __( '%sSIF GROUP%s puede ser su partner logístico, si nos elije tendrá la ventaja necesaria para que su cadena de distribución y suministro sea lo que lo diferencie de su competencia.', '<strong>', '</strong>' ); ?></p>
					</li>
					<li>
						<div class="icon"><span class="icon-industry-4"></span></div>
						<h2><?php echo __( 'Industrias químicas y petroquímicas' ); ?></h2>
						<p><?php echo __( '%sSIF GROUP%s está altamente especializado en el movimiento de embarques para estas exigentes industrias. Mover sus mercaderías con costos acotados y altos estándares de calidad es una meta en estas industrias y %sSIF GROUP%s cumple con estas premisas.', '<strong>', '</strong>', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'Tenemos una alta especialización en el manejo de mercancías peligrosas en todas las modalidades (AÉREA, MARÍTIMA,TERRESTRE y MULTIMODAL). Nuestros transportistas exceden las exigencias de nuestros clientes en cuanto al alcance de servicio y equipamiento utilizado para los transportes.' ); ?></p>
						<p><?php echo __( 'Podemos afrontar cualquier desafío, y ofrecerle una opción que lo sorprenderá.' ); ?></p>
					</li>
				</ul>
				<ul>
					<li>
						<div class="icon"><span class="icon-industry-5"></span></div>
						<h2><?php echo __( 'Fashion, garments & fabric' ); ?></h2>
						<p><?php echo __( 'Soluciones logísticas que están siempre de temporada.' ); ?></p>
						<p><?php echo __( '%sSIF GROUP%s atiende clientes de esta exigente industria. Somos concientes de los tiempos acotados a los que se ven sometidos los clientes, y de la importancia de poder atender los tiempos de entrega.', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'Cumplimos ofreciendo al cliente soluciones creativas con opciones de tiempos de tránsito según su necesidad y presupuesto.' ); ?></p>
						<p><?php echo __( 'Nuestras soluciones están siempre de moda.' ); ?></p>
					</li>
					<li>
						<div class="icon"><span class="icon-industry-6"></span></div>
						<h2><?php echo __( 'Industria alimenticia, vinos y perecederos' ); ?></h2>
						<p><?php echo __( '%sSIF GROUP%s provee soluciones confiables para la exigente industria de la alimentación.  Poseemos alianzas estratégicas con proveedores rigurosamente seleccionados y de probada confiabilidad, cuidado de las cadenas de temperatura y de los requerimientos específicos para que cada embarque llegue a su destino final en óptimas condiciones.', '<strong>', '</strong>' ); ?></p>
					</li>
				</ul>
			</article>
		</section><!-- /.industries -->

		<section id="global" class="global">
			<article class="first">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'PRESENCIA GLOBAL' ); ?></h2>
						<p><?php echo __( 'Integramos las redes %sIFLN (International Freight Logistics Network) y EGLN (Elite Global Logistic Network)%s, ambas con cobertura global, a través de las cuales tenemos presencia en más de 180 países.', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'Podemos atender embarques desde y hacia cualquier sitio en donde sea requerido, ya que operamos en los 5 continentes.' ); ?></p>
					</div>
					<div class="icons">
						<ul>
							<li>
								<div class="icon-global"></div>
							</li>
							<li>
								<div class="logo logo-tmp">Logo IFLN</div>
								<div class="logo logo-tmp">Logo GLN</div>
							</li>
						</ul>
					</div>
				</div>
				<div id="map" class="map"></div>
			</article>
		</section><!-- /.global -->

		<section id="customers" class="customers">
			<article>
				<h2><?php echo __( 'CLIENTES' ); ?></h2>
				<p><?php echo __( 'Algunos de los clientes que confían sus embarques a SIF Group' ); ?></p>
				<img src="img/customers.png" alt="">
			</article>
		</section><!-- /.customers -->

		<section id="about" class="about">
			<article class="first">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'QUIENES SOMOS' ); ?> <span class="icon-about-us"></span></h2>
						<p><?php echo __( '%sSIF Group%s fue fundada en 1991 como una empresa especializada en servicios de logística de transporte internacional, enfocada en ofrecer una solución regional en el Mercosur para agentes y clientes alrededor del mundo.', '<strong>', '</strong>' ); ?></p>
						<p><?php echo __( 'A los pocos años de iniciadas las operaciones en Argentina, con el apoyo de importantes clientes, continuamos con la apertura de oficinas regionales en Brasil y Chile, luego la expansión se cristalizó con la apertura en Paraguay y Uruguay.' ); ?></p>
						<p><?php echo __( 'A lo largo de los años nos hemos esforzado continuamente por alcanzar la excelencia y lograr un crecimiento constante. Nuestro éxito se debe al énfasis en la profesionalidad del personal, junto con procedimientos innovadores e incorporación de moderna tecnología.' ); ?></p>
					</div>
				</div>
				<div class="image"></div>
			</article>
			<article class="people">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'NUESTRA GENTE' ); ?></h2>
						<div class="row">
							<div class="col">
								<p><?php echo __( 'Nuestro éxito se basa en el compromiso y en la inversión en nuestra gente.  Eso nos permite permanecer en la vanguardia de los cambios de la industria del comercio internacional. ' ); ?></p>
								<p><?php echo __( 'A diferencia del estilo de línea de montaje, usado por la mayoría de los competidores y en las multinacionales mas grandes, nuestro personal se organiza en operaciones basadas en pequeños equipos. Los miembros del equipo toman las transacciones de principio a fin, lo que permite un servicio integral y con un seguimiento personalizado. ' ); ?></p>
								<p><?php echo __( 'Muchos de nuestros empleados iniciaron sus carreras con SIF GROUP y después de la formación y el desarrollo a largo plazo, ahora forman parte de la columna vertebral de la compañía.' ); ?></p>
								<p><?php echo __( 'Nuestra gente se compromete a ayudar a los clientes a fortalecer la calidad, la rentabilidad y el cumplimiento normativo de sus programas de exportación e importación. ' ); ?></p>
							</div>
							<div class="col">
								<p><?php echo __( 'Nuestra gente es capaz y está dispuesta a compartir la experiencia acumulada, identificar las áreas de mejora y ayudar a resolver los obstáculos que se pudieran presentar ' ); ?></p>
								<p><?php echo __( 'Trabajando con SIF GROUP como parte de su equipo, usted es libre para concentrarse en las prioridades de su negocio día a día, mientras nuestra gente se ocupará de la gran cantidad de detalles de la operatoria de transporte. En pocas palabras, estamos aquí para hacer su trabajo más fácil.' ); ?></p>
								<p><?php echo __( 'Trabajando con SIF, se beneficiará de nuestro enfoque orientado en la gente, que se traduce en servicios adaptados a sus necesidades especificas.   Con el soporte de nuestro personal altamente capacitado, y organizado en equipos por clientes, nos centramos en forma consistente en sus expectativas, para desarrollar soluciones que se integren perfectamente con la forma en que su negocio opera.' ); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="image"></div>
			</article>
		</section><!-- /.about -->

		<section id="reason" class="reason">
			<article class="first">
				<div class="main">
					<div class="content">
						<h2><?php echo __( 'RAZÓN DE SER' ); ?></h2>
						<div class="description">
							<p><?php echo __( 'El grupo SIF es un integrador de soluciones que, apoyado en sus recursos humanos y tecnológicos, brinda un servicio de Logística Internacional ofreciendo el asesoramiento, la información y los medios para que las mercancías de nuestros clientes lleguen desde su punto de origen hasta su punto de destino en el tiempo preestablecido con seguridad y máxima economía.%s %s Esta misión se basa en 7 compromisos.%s', '<br>', '<strong>', '</strong>' ); ?></p>
						</div>
						<ul>
							<li>
								<h2 class="alt">01 _</h2>
								<h2><?php echo __( 'Brindar un servicio a medida' ); ?></h2>
								<p><?php echo __( 'En SIF somos conscientes del valor estratégico de una óptima gestión de logística para influir favorablemente en la calidad y competitividad de sus productos. Nuestro equipo de profesionales asume el compromiso de brindar un servicio a medida de las necesidades individuales y especificas de cada cliente.' ); ?></p>
							</li>
							<li>
								<h2 class="alt">02 _</h2>
								<h2><?php echo __( 'Garantizar una completa visibilidad del proceso Logístico' ); ?></h2>
								<p><?php echo __( 'Le aseguramos a nuestros clientes la continua información sobre la posición de sus productos, usando la tecnología más eficaz para cada operación.' ); ?></p>
							</li>
							<li>
								<h2 class="alt">03 _</h2>
								<h2><?php echo __( 'Ser un integrador del proceso logístico' ); ?></h2>
								<p><?php echo __( 'Una adecuada integración del proceso logístico garantiza flexibilidad en el flujo de mercadería ante cambios en la demanda. Nuestra Empresa, al actuar como único responsable de todo el proceso logístico, gerencia todas las operaciones, y garantiza una calidad uniforme, a lo largo de toda la cadena.' ); ?></p>
							</li>
							<li>
								<h2 class="alt">04 _</h2>
								<h2><?php echo __( 'Proveer la mejor solución regional' ); ?></h2>
								<p><?php echo __( 'Hoy, América del Sur, está convirtiéndose en un todo indivisible, y requiere un servicio integrado regional. Nuestras oficinas operativas en el Mercosur, sumadas a nuestra Red de Agentes en Europa, Asia, América, Africa y Oceanía, nos permite ser un nexo operativo en el manejo de mercaderías entre el Mercosur y el mundo.' ); ?></p>
							</li>
							<li>
								<h2 class="alt">05 _</h2>
								<h2><?php echo __( 'Ser un facilitador entre nuestro cliente y sus proveedores' ); ?></h2>
								<p><?php echo __( 'Garantizamos un óptimo funcionamiento de los procesos de transporte, de administración y de almacenamiento que estén bajo nuestra responsabilidad. Al ser único responsable, actuamos de nexo con sus proveedores simplificando de esta forma la comunicación entre las partes.' ); ?></p>
							</li>
							<li>
								<h2 class="alt">06 _</h2>
								<h2><?php echo __( 'Responder con máxima flexibilidad y dinamismo' ); ?></h2>
								<p><?php echo __( 'Nuestro equipo de profesionales actúa en forma proactiva para atender los requerimientos diarios de nuestros clientes. Estudiamos las necesidades de cada situación, generando una respuesta rápida, y evitando así pérdidas de tiempo y de dinero.' ); ?></p>
							</li>
							<li>
								<h2 class="alt">07 _</h2>
								<h2><?php echo __( 'Asegurar la mejora continua de las operaciones' ); ?></h2>
								<p><?php echo __( 'Atendemos los objetivos a cumplir en cada operación, y realizamos un riguroso análisis para diseñar la operativa más adecuada. Trabajamos en estrecha interacción con nuestros clientes para definir las oportunidades de mejora.' ); ?></p>
							</li>
							<li class="call-to-action">
								<h2><?php echo __( 'Un único operador,%suna única calidad', '<br>' ); ?></h2>
								<p><?php echo __( 'SIF Group actúa como único responsable en todo el proceso, garantizando calidad uniforme a lo largo de toda la cadena logistica.' ); ?></p>
								<a href="#contact" data-toggle="scrollTo" class="btn btn-radius"><?php echo __( 'CONSULTAR' ); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</article>
		</section><!-- /.reason -->

		<section id="contact" class="contact">
			<article class="first">
				<form action="/?action=contact" method="post">
					<h2><?php echo __( 'Contáctenos' ); ?></h2>
					<div class="alert hidden"></div>
					<div class="form-group">
						<div class="input">
							<select id="input_country" name="data[country]" data-toggle="customSelect">
								<option value="SIF ARGENTINA">SIF ARGENTINA</option>
								<option value="SIF BRASIL">SIF BRASIL</option>
								<option value="SIF USA">SIF USA</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="input">
							<input type="text" id="input_name" name="data[name]" placeholder="<?php echo __( 'Nombre completo' ); ?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input">
							<input type="text" id="input_email" name="data[email]" placeholder="<?php echo __( 'Email' ); ?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input">
							<input type="text" id="input_phone" name="data[phone]" placeholder="<?php echo __( 'Teléfono' ); ?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input">
							<textarea id="input_message" name="data[message]" placeholder="<?php echo __( 'Mensaje' ); ?>"  class="form-control"></textarea>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary btn-submit btn-radius"><?php echo __( 'ENVIAR' ); ?></button>
					</div>
				</form>
				<ul class="icons">
					<li><span class="icon-water"></span></li>
					<li><span class="icon-earth"></span></li>
					<li><span class="icon-air"></span></li>
				</ul>
			</article>
		</section><!-- /.contact -->
	</main>

	<footer>
		<a href="#intro" data-toggle="scrollTo" class="scroll-up"><span class="icon icon-arrow-up"></span></a>
		<a href="http://dondemires.com" class="developer" target="_blank">dondemires.com</a>
	</footer>

	<script src="./js/vendor/jquery.min.js" type="text/javascript"></script>
	<script src="./js/vendor/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGj7gSYVZ-MqwKFZu-Na7aeze4uIppYYc&language=es" type="text/javascript"></script>
	<script src="./js/vendor/tooltip/jquery.tooltip.min.js" type="text/javascript"></script>
	<script src="./js/vendor/custom-select/jquery.custom-select.min.js" type="text/javascript"></script>
	<script src="./js/vendor/infobox/jquery.infobox.js" type="text/javascript"></script>
	<script src="./js/vendor/jquery.validate.min.js" type="text/javascript"></script>
	<script src="./js/main.js?v=<?php echo VERSION; ?>" type="text/javascript"></script>
	<script src="./js/maps.js?v=<?php echo VERSION; ?>" type="text/javascript"></script>
	<script>app.data = <?php echo json_encode( $jsData ); ?></script>
</body>
</html>
