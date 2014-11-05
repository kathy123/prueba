@extends('layouts.master')

@section('title')
 UATF | Login
@stop
@section('header')
 <?php
    echo HTML::style('assets/fe/css/css/cloud-admin.css');
    echo HTML::style('assets/fe/js/bootstrap-daterangepicker/daterangepicker-bs3.css');
    // UNIFORM 
    echo HTML::style('assets/fe/js/uniform/css/uniform.default.min.css');
    // ANIMATE 
    echo HTML::style('assets/fe/css/animatecss/animate.min.css');
    // FONTS 
    echo HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
  ?>
@stop
@section('content')
<div class="login">  
  <!-- PAGE -->
  <div id="page">
      <!-- LOGIN -->
      <section id="login" class="visible">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="login-box-plain">
                <h2 class="bigintro">Ingreso al Sistema</h2>
                <div class="divide-40"></div>
                 @if(Session::has('login_errors'))
                 <span  class="text-danger"> Usuario o Contraseña incorrectos</span>
                 @endif
                <form role="form" method="post" action="<?=URL::to('logins');?>">
                  <div class="form-group">
                  <label >Ususario</label>
                  <i class="fa fa-user"></i>
                  <input type="username" class="form-control" placeholder="Nombre de Usuario" name="username" autofocus require >
                  </div>
                  <div class="form-group"> 
                  <label >Contraseña</label>
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" placeholder="Contraseña" name="password" autofocus require>
                  </div>
                  <div >
                  <button type="submit" class="btn btn-danger">Acceder</button>
                  </div>
                </form>
                <div class="divide-20"></div>
                Para tener acceso al sistema introduzca Usuario y Clave correspondiente.
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/LOGIN -->
  </div>
 
</div>
@stop
@section('pie')
          <div class="col-sm-4"><i class="fa fa-home"></i><a href="#">Inicio</a></div>
          <div class="col-sm-4"><i class="fa fa-graduation-cap"></i><a href="#">Programas</a></div>
          <div class="col-sm-4"><i class="fa fa-book"></i><a href="#">Contactos</a></div>
          <br><br><br>
          <center>Copyright © 2014   Universidad Autónoma Tomás Frías   Direccíon de Postgrado</center>   
@stop
@section('footer')
<!-- JQUERY -->
  <script src="js/jquery/jquery-2.0.3.min.js"></script>
  <!-- JQUERY UI-->
  <script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
  <!-- BOOTSTRAP -->
  <script src="bootstrap-dist/js/bootstrap.min.js"></script>

  <!-- UNIFORM -->
  <script type="text/javascript" src="js/uniform/jquery.uniform.min.js"></script>
  <!-- CUSTOM SCRIPT -->
  <script src="js/script.js"></script>
   <script>
    jQuery(document).ready(function() {   
      App.setPage("login");  //Set current page
      App.init(); //Initialise plugins and elements
    });
  </script>
  <script type="text/javascript">
    function swapScreen(id) {
      jQuery('.visible').removeClass('visible animated fadeInUp');
      jQuery('#'+id).addClass('visible animated fadeInUp');
    }
  </script>
  <!-- /JAVASCRIPTS -->
  @parent
@stop

    