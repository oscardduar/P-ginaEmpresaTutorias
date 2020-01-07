<!DOCTYPE html>
<html>
<head>
	<title>Sthartutorias</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/media.css" media="screen and (max-width:768px)"/>
	<link rel="shortcut icon" type="img/x-icon" href="img/favicon.ico">
</head>
<body>

<!--Inicio del header-->
<header class="header" >
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3B4F7B; ">
		<div class="container-xl">
 <a class="navbar-brand" href="#"><img src="img/imagenicono.jpg" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#principal">Principal </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#beneficios">Beneficios</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#grados">Grados</a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="#testimonios">Testimonios</a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="#nosotros">Nosotros</a>
      </li>
    </ul>
  </div>
		</div>
</nav>
</header>
<!--Fin del header-->


<!--Inicio de portada-->

<section class="portada" id="principal">
	<div class="container">
			<div class="row text-center">
			<figure class="col-12 col-lg pt-3">
			<img src="img/imagenportada4.jpg">
			</figure>
			<div class="col-12 col-lg pt-2">
				<h3>Nuestras tutorías integran el conocimiento junto con el desarrollo de una buena memoria, una excelente concentración y el incremento de la autoconfianza.</h3>
				<h4>Primaria-Básico-Diversificado-Universidad Matemática-Física-Estadística-Química-Inglés-Lenguaje-Cualquier otra Materia-<br>ClasesGrupales-Tareas-Capacitaciones</h4>
				<form method="post">
 				 <div class="form-row ">
  					  <div class="col-12 col-lg pt-1" >
  						    <input type="text" class="form-control" placeholder="Tu nombre" name="name" required="">
   					 </div>
  					  <div class="col-12 col-lg pt-1">
  						    <input type="email" class="form-control" placeholder="Tu correo" name="email" required="">
   					 </div>
 				     </div>
 				 <div class="form-row ">
  					  <div class="col-12  col-lg pt-1">
  						    <input type="text" class="form-control" placeholder="Tu Telefono" name="phone" required="">
   					 </div>
  					  <div class="col-12 col-lg pt-1">
  						    <input type="text" class="form-control" placeholder="Cursos que necesitas" name="msg" required="">
   					 </div>
   	
  					 </div>

  					  <div class="form-row pt-1 pb-2">
  							  <div class="col">
  	 				     <a class="btn btn-success mb-2 " href="https://wa.me/50233381776?text=Me%20gustaría%20tener%20más%20información%20sobre%20los%20servicios%20de%20tutorías" target="_blank" ><div class="flex-container"><i class="fa fa-whatsapp" aria-hidden="true"></i><p class="auxiliar1"> 3338 1776</p></div></a>



   						 </div>
   						    <div class="col">
  					     <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
   					 </div>
  					 </div>		
				</form>
<!--Instrucción para incluir información de php-->
					<?php
					include("correo.php");
					?>

<!--Instrucción para incluir información de php-->
			</div>
		</div>
	</div>
</section>
<!--Fin de portada-->


<!--Inicio de beneficios-->
<section class="beneficios" id="beneficios">
	<div class="container">
			<h1>Nuestros Beneficios</h1>
	<p>Te ofrecemos tutorías en todas las materias, contamos con matemática, física, química, inglés, computación, programación y muchas más, lo mejor es que nuestros servicios son a domicilio y a toda Guatemala. Nuestros tutores son personas de reconocida integridad para que te sientas en confianza. Pregunta sin compromiso.</p>
		<div class=" flex-container">	<iframe class="ivideo" src="https://www.youtube.com/embed/f2In_bCOqXw?autoplay=1&amp;loop=1"></iframe></div>
    </div>
</section>
<!--Fin de beneficios-->

<section class="intermedia">
	
		   <a class="btn btn-success mb-2 " href="https://wa.me/50233381776?text=Me%20gustaría%20tener%20más%20información%20sobre%20los%20servicios%20de%20tutorías" target="_blank"><div class="flex-container"><i class="fa fa-whatsapp" aria-hidden="true"></i><p class="auxiliar1"> 3338 1776</p></div></a>
   			 <a class="btn btn-primary mb-2 " href="tel:+50233381776" target="_blank"><div class="flex-container"><i class="fa fa-phone" aria-hidden="true"></i><p class="auxiliar1"> 3338 1776</p></div></a>

 			   <a class="btn btn-info mb-2 " href="mailto:info@sthartutorias.com?Subject=Interesad@%20en%20las%20tutorias" target="_blank"><div class="flex-container"><i class="fa fa-envelope-o" aria-hidden="true"></i><p class="auxiliar1"> info@sthartutorias.com</p></div></a>

</section>

<!--Inicio de grados-->

<section class="grados" id="grados">
	<div class="container text-center">
  <div class="row">
    <div class="col-12 col-lg">
    <img src="img/primaria.png">
    <h1>Primaria</h1>
    </div>
    <div class="col-12 col-lg">
       <img src="img/secundaria.png">
    <h1>Secundaria</h1>
    </div>
        <div class="col-12 col-lg">
          <img src="img/universidad.png">
    <h1>Universidad</h1>
    </div>
  </div>
	</div>
</section>

<!--Fin de grados-->

<!--Inicio de testimonios-->
<section class="testimonios" id="testimonios">
	<div class="container ">
		<h1>Testimonios</h1>
		<table style="width:100%">
  <tr>
    <td><div  class="bola">1</div></td>
    <td class="comentario"><b>Carlos Mendez:</b> Desde que empezamos a trabajar con tutorías Sthar mi hija ha empezado incluso a sobresalir en su clase, esto teniendo en cuenta que se le había diagnosticado problemas de aprendizaje. Mis preocupaciones han disminuido desde entonces. <br></td>
  
  </tr>
  <tr>
    <td><div  class="bola">2</div></td>
    <td class="comentario"><b>Marcos Ramirez:</b> Me siento satisfecho con los servicios de Sthar, la tutora llega puntual y muy presentable. Le da muy buena atención a mi hijo y le tiene mucha paciencia. Siempre le lleva preparada la clase. Sin duda lo recomiendo.<br></td>

  </tr>
  <tr>
    <td><div  class="bola">3</div></td>
    <td class="comentario"><b>Genesis Quintanilla:</b> Creo que mis notas han subido con la ayuda de mi tutora, es muy buena en lo que hace y le entiendo muy bien. Cuando tengo dudas le escribo y me responde inmediatamente. Es muy estimulante estudiar con una ayuda personalizada y atenta.<br></td>

  </tr>
</table>
	</div>
</section>


<!--Fin de testimonios-->

<!--Inicia contacto-->

<section class="contacto" id="nosotros">


	<div class="container">
 	 <div class="row">
  		  <div class="col-12 col-lg">

    			<h2> Acerca de Nosotros</h2>
 					  <p> Somos un equipo integrado por pedagogos,
  					 ingenieros, maestros y estudiantes universitarios
					que destacan en sus áreas de estudios, algunos de nuestros 
					integrantes destacados son ganadores de Premio a la Excelencia y otros
					han obtenido los primeros lugares en Olimpiadas de Ciencias y Matemática. Nuestra pasión es la enseñanza de la ciencia y el arte, contamos con más de 10 años de experiencia en el área apoyando a niños, adolescentes y adultos.
						</p>



				    <a class="btn btn-success mb-2 " href="https://wa.me/50233381776?text=Me%20gustaría%20tener%20más%20información%20sobre%20los%20servicios%20de%20tutorías" target="_blank"><div class="flex-container"><i class="fa fa-whatsapp" aria-hidden="true"></i><p class="auxiliar1"> 3338 1776</p></div></a>
				    <a class="btn btn-primary mb-2 " href="tel:+50233381776" target="_blank"><div class="flex-container"><i class="fa fa-phone" aria-hidden="true"></i><p class="auxiliar1"> 3338 1776</p></div></a>

				    <a class="btn btn-info mb-2 " href="mailto:info@sthartutorias.com?Subject=Interesad@%20en%20las%20tutorias" target="_blank"><div class="flex-container"><i class="fa fa-envelope-o" aria-hidden="true"></i><p class="auxiliar1"> info@sthartutorias.com</p></div></a>



											    </div>
											    <div class="col-12 col-lg pb-2">
											    	<h2> Nuestros Planes </h2>
											    	<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
											  Plan Light
											</button>
											    	<p>2 Sesiones por Semana<br>
											    </p>
											    	     	<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
											  Plan Standard
											</button>
											    	<p>2 Sesiones por Semana<br>
											    	2 horas por sesión</p>
											    	      	<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
											  Plan Premium
											</button>
											    	<p>3 Sesiones por Semana<br>
											    	2 horas por sesión</p>
											    	     	      	<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
											  Plan Gold
											</button>
											    	<p>5 Sesiones por Semana<br>
											    	2 horas por sesión<br><br></p>

											    	<p><b>Todos nuestros planes<br>
											    		incluyen atención via <br>
											    		whatsapp para mejorar<br>
											    		la experiencia en tu aprendizaje</b>
											    	</p>
											       </div>
											    <div class="col-12 col-lg">
											       <h2>  Facebook</h2>
											       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fm.facebook.com%2FTutorias-Sthar-102330851166370%2F%3Frefsrc%3Dhttp%253A%252F%252Fsthartutorias.com%252F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
											    </div>
											  </div>
											</div>

</section>



<!--Termina contacto-->

<footer>
	<p>Derechos de autor 2008 ©</p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



<!--



<a href="https://wa.me/50233381776?text=Me%20gustaría%20tener%20más%20información%20sobre%20los%20servicios%20de%20tutorías" target="_blank">

</a>

<a href="tel:+50233381776" target="_blank">



</a>

<a href="mailto:info@sthartutorias.com?Subject=Interesad@%20en%20las%20tutorias" target="_blank">

</a>





	s-->


