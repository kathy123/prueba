@extends('layouts.master')
@section('title')
  @parent
@stop
@section('header')
	@parent
@stop
@section('cara')
 @parent 
@stop
@section('menu-nav')
	@parent
@stop
@section('content')
	@parent	
	    <!-- OFERTAS -->
		<section id="portfolio" class="color-light text-center">			
				<div class="divide40"></div>
					<div class="row">
						<div class="col-md-12">
								<h2 class="text-center">
								<span class="bigintro">OFERTAS DE PROGRAMAS</span>
								</h2>
						</div>
					</div>
					<div class="divide60"></div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div id="filters" class="text-center btn-group">
								  <div  class="hidden-xs">
									  <a class="btn btn-lg btn-primary active" data-filter="*" href="#">All</a>
									  <a class="btn btn-lg btn-warning" data-filter=".design" href="#">Design</a>
									  <a class="btn btn-lg btn-success" data-filter=".videos" href="#">Videos</a>
									  <a class="btn btn-lg btn-danger" data-filter=".banners" href="#">Banners</a>
								  </div>
								  <div class="visible-xs">
									   <select id="e1" class="form-control">
											<option value="*">All</option>
											<option value=".design">Designs</option>
											<option value=".videos">Videos</option>
											<option value=".banners">Banners</option>
										</select>
								  </div>
							</div>
						</div>
					</div>
					<div class="divide40"></div>
					<div class="container">
						<div id="filter-items" class="row">
						    @if($offer)
						    @foreach($offer as $oferta)
							<div class="col xs-12 col-sm-6 design item">
								<div class="filter-content">
									<img src="{{$oferta->url}}" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>{{$oferta->observaciones}}</h4>
										<a href="{{$oferta->url}}" class="btn btn-sm btn-warning colorbox-button">Registrarse(Modal)</a>
									</div>
								</div>
							</div>
							@endforeach
                                </tbody>
                            </table>
                            @else 
                            <h3>No hay ofertas de postgrado registrado</h3>
                            @endif
							<!--<div class="col xs-12 col-sm-4 videos item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/2.jpg" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA 2</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly development
										</p>
										<a href="assets/fe/img/gallery/2.jpg" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>
							<div class="col xs-12 col-sm-4 banners item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/3.png" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA 3</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly developmen
										</p>
										<a href="assets/fe/img/gallery/3.png" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>
							<div class="col xs-12 col-sm-4 videos item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/4.png" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA UNO</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly development
										</p>
										<a href="assets/fe/img/gallery/4.png" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>
							<div class="col xs-12 col-sm-4 design item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/5.png" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA DOS</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly development
										</p>
										<a href="assets/fe/img/gallery/5.png" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>
							<div class="col xs-12 col-sm-4 banners item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/8.png" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA TRES</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly development</p>
										<a href="assets/fe/img/gallery/8.png" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>
							<div class="col xs-12 col-sm-4 banners item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/7.jpg" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA CUATRO</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly development.
										</p>
										<a href="assets/fe/img/gallery/7.jpg" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>
							<div class="col xs-12 col-sm-4 videos item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/2.jpg" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA CINCO</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly development.
										</p>
										<a href="assets/fe/img/gallery/2.jpg" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>
							<div class="col xs-12 col-sm-4 videos item">
								<div class="filter-content">
									<img src="assets/fe/img/gallery/2.jpg" alt="" class="img-responsive" />
									<div class="image-content">
										<h4>OFERTA SEIS</h4>
										<p class="hidden-xs hidden-sm">
											For faster mobile-friendly development.
										</p>
										<a href="assets/fe/img/gallery/2.jpg" class="btn btn-sm btn-warning colorbox-button">Know More</a>
									</div>
								</div>
							</div>-->
						</div>
					</div>
					<div class="divide60"></div>
		</section>
		<!--/OFERTAS -->				
		<!-- EVENTOS -->
		<section id="parallax-2" data-type="background" data-speed="10" class="pages textcenter">
			<div class="parallax-overlay">
				<h2 class="text-center">
					<span class="bigintro-light">Eventos</span>
				</h2>
				 <div id="myCarousel" class="carousel slide">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="item active">
					  <div class="container">
						<div class="carousel-caption">
						  <div class="row">
							<div class="circular col-md-6">
								<img src="assets/nuevos/acreditacion_1_2.png" alt="headshot #1" />
								<h3>SEGUNDA VERSIÓN DEL PROGRAMA DE DIPLOMADO EN EVALUACION y ACREDITACIÓN UNIVERSITARIA (VIRTUAL)(2014-2015)</h3>
								<p>La Universidad Autónoma “Tomás Frías” conjuntamente la Fundación FAUTAPO, convocan a todos los profesionales a inscribirse a la segunda versión del Programa de Diplomado en Evaluación y Acreditación de la calidad en la Educación Superior. </p>
								<h4>ENLACE</h4>
							</div>
							<div class="circular col-md-6">
								<img src="assets/nuevos/acreditacion_2_2.png" alt="headshot #1" />
								<h3>SEGUNDA VERSIÓN DEL PROGRAMA DE DIPLOMADO EN EVALUACION y ACREDITACIÓN UNIVERSITARIA (VIRTUAL)(2014-2015)</h3>
								<p>La Universidad Autónoma “Tomás Frías” conjuntamente la Fundación FAUTAPO, convocan a todos los profesionales a inscribirse a la segunda versión del Programa de Diplomado en Evaluación y Acreditación de la calidad en la Educación Superior. </p>
								<h4>ENLACE</h4>
							</div>
						 </div>
						</div>
					  </div>
					</div>
					<div class="item">
					  <div class="container">
						<div class="carousel-caption">
						  <div class="row">
							<div class="col-md-12">
								<img src="img/nuevos/geotecnia_1.png" alt="headshot #3" />
								<h3>II Programa Internacional de Maestría en Geotecnia</h3>
								<p>La Universidad Autónoma "Tomás Frías" conjuntamente el Instituto Superior "José Antonio Echeverria" - CUJAE, convocan a los profesionales del área de Ingeniería (Geología, Mecánica de Rocas, Mecánica de suelos, Diseños, etc.) a:</p>
								<h4>www.enlace.com</h4>
							</div>
						 </div>
						</div>
					  </div>
					</div>
					<div class="item">
					  <div class="container">
						<div class="carousel-caption">
						  <div class="row">
							<div class="col-md-12">
								<img src="img/nuevos/geotecnia_2.png" alt="headshot #3" />
								<h3>II Programa Internacional de Maestría en Geotecnia</h3>
								<p>La Universidad Autónoma "Tomás Frías" conjuntamente el Instituto Superior "José Antonio Echeverria" - CUJAE, convocan a los profesionales del área de Ingeniería (Geología, Mecánica de Rocas, Mecánica de suelos, Diseños, etc.) a:</p>
								<h4>www.enlace.com</h4>
							</div>
						 </div>
						</div>
					  </div>
					</div>
				  </div>
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="fa fa-chevron-left fa-2x"></span></a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="fa fa-chevron-right fa-2x"></span></a>
				</div>
				<div class="divide85"></div>
			</div>
		</section>
		<!--/EVENTOS -->
			
		<!-- TEAM UNIT -->
		<section id="team" class="color-light text-center">
			<div class="container">
				<div class="divide40"></div>
				<div class="row">
					<div class="col-md-12">
							<h2 class="text-center">
							<span class="bigintro">EVENTOS</span>
							</h2>
					</div>
				</div>
				<div class="divide60"></div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="team">
							<img src="assets/eventos/1.jpg">
							<h3>CURSO DE EVALUACION Y ACREDITACION</h3>
							<h4>PRIMER DIA</h4>
							<p>Aqui tengo q colocar una descripcion.</p>
							<p>Aqui tengo q colocar una descripcion.</p>
							<p>Aqui tengo q colocar una descripcion.</p>
					    </div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="team">
							<img alt="" src="assets/eventos/2.jpg">
							<h3>curso</h3>
							<h4>curso de evaluacion y acreditacion</h4>
							<p>Aqui tengo q colocar una descripcion</p>
							<p>Aqui tengo q colocar una descripcion.</p>
							<p>Aqui tengo q colocar una descripcion.</p>
						</div>
					</div>
				</div>
				<div class="divide60"></div>
			</div>
		</section>
		<!--/TEAM UNIT  -->

		<!-- TESTIMONIALS -->
		<section id="parallax-4" data-type="background" class="pages textcenter">
			<div class="parallax-overlay">
				<h2 class="text-center">
					<span class="bigintro-light">NUESTRA INFORMACIÓN</span>
				</h2>
				<div class="row">
					<div class="col-md-12 about">
					    <div class="circular col-md-5">
						<h3>Historía</h3>
						<p>El Postgrado en la Universidad Autónoma "Tomás Frías", toma fuerza en su organización, dirección y ejecución a partir de 1988 bajo la dirección del Dr. Ing. Carlos Serrano Bravo.
                            A partir de 1996, el honorable Consejo Universitario aprobó la conformación de la Comisión Pedagógica, integrada por los docentes M Sc. Lic. Raúl Vargas ángelo y M.Sc. Elizabeth Cortés Guzmán, esta comisión trabajó en base a un convenio internacional con la Universidad Pedagógica Enrique José Varona de la Habana Cuba, para la formación de docentes de la Universidad Autónoma Tomás Frías" en el área de la Educación Superior.
                            Posteriormente, en 1999 asume la dirección de Postgrado el M.Sc. Ing. Willy Vargas E. dirigiendo variados cursos de Diplomados, Maestrías en Educación Superior y de especialidad para las diferentes facultades.
                            A convocatoria del Secretario de Postgrado del CEUB Dr. Juan Carlos Pereira Z. hacia la IV Reunión Nacional de Directores de Postgrado, en la ciudad de Cochabamba (10,11 y 12 de octubre del 2001), reunión en la que se presentó fundamentalmente el plan estratégico del Postgrado 2002-2006, a nivel del sistema Universitario, este documento presentado se tomó como base principal para la ejecución del plan estratégico de la dirección de Postgrado para los años 2002-2006 en la Universidad Autónoma "Tomás Frías"
                            En la actualidad se viene desarrollando los diferentes cursos de Postgrado, contemplados en cursos de superación profesional y programas de maestría, tanto en Educación Superior como de especialidad.</p>
						</div>
						<div class="circular col-md-7">
						<h3>Objetivo</h3>
						<p>La Dirección de Postgrado tiene como objetivo:
						   "Formar Recursos Humanos en el 4to. Nivel de educación para satisfacer las necesidades de enseñanza e investigaci ón en la Universidad Autónoma Tomás Frías y contribuir a resolver problemas de producción de Bienes y Servicios que demande la Sociedad."</p>
						<h3>Misión</h3>
						<p>"Es una unidad líder que satisface las demandas de formación de profesionales con excelencia académica en la educación de 4to. Nivel, gestionando programas de postgrado para su desempeño en la comunidad educativa, al fortalecer la actividad académica, la investigación, la transferencia tecnológica y el saber en procesos activos de interacción social, con lo que se contribuye al desarrollo económico, tecnológico y académico a nivel local, nacional e internacional."</p>
						<h3>Visión</h3>
						<p>"La visión consiste en planificar, coordinar y promover programas de calidad, excelencia y pertinencia social, con alto impacto en el desarrollo económico y social tanto a nivel local, nacional, como internacional. Realiza seguimientos al sistema educativo de formación profesional especializada que coadyuve y norme las actividades de investigación postgraduada de la UATF, promoviendo el desarrollo y aplicación del conocimiento a partir de la relaci ón con la sociedad, con calidad acad émica, relevancia científica y pertinencia social, cualificando integralmente a profesionales que contribuyan de esta manera a la transformación y el desarrollo de nuestro país en la ejecución de políticas educacionales."</p>
						</div>
	                </div>
				</div>
				<div class="divide85"></div>
			</div>
		</section>
		<!--/TESTIMONIALS -->
				<!-- FEATURES UNIT -->
		<section id="features" class="color-light">
			<div class="container">
				<div class="divide40"></div>
				<div class="row">
					<div class="col-md-12">
							<h2 class="text-center">
							<span class="bigintro">INFORMACIÓN</span>
							</h2>
					</div>
				</div>
				<div class="divide60"></div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<i class="extralarge fa fa-graduation-cap"></i>
							<br/><br/>
							<h3>Diplomado</h3>
							<br/>
							<p> Los estudios de Diplomado tienen como objetivo profundizar y actualizar los conocimientos y destrezas que requiere el ejercicio profesional en un área específica.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<i class="extralarge fa fa-graduation-cap"></i>
							<br/><br/>
							<h3>Especialidad</h3>
							<br/>
							<p> Los Programas de Especialidad Técnica (E.T.), están dirigidos a profesionales con formación de Técnico Superior Universitario
								Los Programas de Especialidad Superior (E.S), están dirigidos a profesionales con formación de Licenciatura
								Los Programas de Especialidad Clínico Quirúrgica(E.C.Q.), tienen por objeto formar Recursos Humanos especializados de calidad, basados en principios de integridad, bio�tica e investigación en el área clínico quirúrgica para contribuir a la mejora del Sistema Boliviano de Salud.</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<i class="extralarge fa fa-graduation-cap"></i>
							<br/><br/>
							<h3>Maestría</h3>
							<br/>
							<p>Los Programas de Maestría comprenden un conjunto de asignaturas/módulos y de otras actividades organizadas en un área específica del conocimiento destinadas al análisis profundo y sistemático de la misma y a la formación metodológica para la investigación, brindando conocimientos avanzados en un campo del saber, conducentes al grado de MAGISTER. </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="feature">
							<i class="extralarge fa fa-graduation-cap"></i>
							<br/><br/>
							<h3>Doctorado</h3>
							<br/>
							<p>Los Programas de Doctorado, tienen por finalidad la realización de trabajos de investigación originales, que constituyan aportes científicos y tecnológicos significativos al conocimiento en un área específica del saber. </p>
						</div>
					</div>
				</div>
				<div class="divide60"></div>
			</div>
		</section>
		<!--/FEATURES UNIT  -->					
		<!-- SOCIAL BAR -->
		<section class="color-danger social text-center">
			<section class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>Tambien puedes serguirnos en:</h3>
						<a href="www.facebook.com/postgradoUATF"><i class="fa fa-facebook-square fa-2x darkred rm20 bm10"></i> </a>
						<i class="fa fa-twitter-square fa-2x darkred rm20 bm10"></i>		
					</div>
				</div>
			</section>
		</section>
		<!--/SOCIAL BAR -->
		
		<!-- CONTACT-US -->
		<section id="parallax-3" data-type="background" data-speed="10" class="pages text-center">
			<div class="parallax-overlay">
				<section id="contact">
					<section class="container">
						<div class="divide40"></div>
										<div class="row">
							<div class="col-md-12">
									<h2 class="text-center">
									<span class="bigintro-light">Contact Us</span>
									</h2>
							</div>
						</div>
						<div class="divide20"></div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3 form-input">
								<input id="company" type="text" placeholder="Company" value="" name="company"/>
							</div>
							<div class="col-md-6 col-md-offset-3 form-input">
								<input id="title" type="text" placeholder="Title" value="" name="title"/>
							</div>
							<div class="col-md-6 col-md-offset-3 form-input">
								<input id="name" type="text" placeholder="Name" value="" name="name"/>
							</div>
							<div class="col-md-6 col-md-offset-3 form-input">
								<input id="email" type="email" placeholder="Email" value="" name="email"/>
							</div>
							<div class="col-md-6 col-md-offset-3 form-input">
								<textarea id="message"  placeholder="Message" name="message"></textarea>
							</div>
							<div class="col-md-6 col-md-offset-3 form-submit">
								<button id="submit" class="btn btn-warning btn-lg" type="submit">SEND</button>
							</div>
						</div>
						<div class="divide60"></div>
					</section>
				</section>
			</div>
		</section>
		<!--/CONTACT-US -->
@stop
@section('pie')
	@parent
	<div id="column-footer" class="row-fluid">
					<div class="col-sm-4">
						<h3>INICIO</h3>
						<ul>
							<li><a href="#">ENLACEUNO</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h3>OFERTAS</h3>
						<ul>
							<li><a href="#">ENLACEDOSSS</a></li>
						</ul>
					</div>
					<div class="col-sm-4">
						<h3>CONTACTOS</h3>
						<ul>
							<li><a href="#">ENLACETRESSS</a></li>
						</ul>
					</div>
				</div>
@stop
@section('footer')
	@parent
@stop