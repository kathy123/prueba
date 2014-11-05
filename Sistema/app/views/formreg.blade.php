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
      <!-- REGISTER -->
      <section id="register"> 
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="login-box-plain">
                <h2 class="bigintro">Register</h2>
                <div class="divide-40"></div>
                <!-- <form role="form">
                  <div class="form-group">
                  <label for="exampleInputName">Nombre</label>
                  <i class="fa fa-font"></i>
                  <input type="text" name="firstname"class="form-control" id="" >
                  </div>
                  <div class="form-group">
                  <label for="exampleInputName">Apellidos</label>
                  <i class="fa fa-font"></i>
                  <input type="text" name="lastname"class="form-control" id="" >
                  </div>
                  <div class="form-group">
                  <label for="exampleInputName">correo electronico</label>
                  <i class="fa fa-font"></i>
                  <input type="text" name="email" class="form-control" id="" >
                  </div>

                  <div class="form-group">
                  <label for="exampleInputUsername">telefono</label>
                  <i class="fa fa-user"></i>
                  <input type="text" class="form-control"name="phone1" id="exampleInputUsername" >
                  </div>
                  <div class="form-group">
                  <label for="exampleInputName">fecha de nacimiento</label>
                  <i class="fa fa-font"></i>
                  <input type="text" class="form-control" id="" >
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Pais de nacimiento</label>
                  <i class="fa fa-envelope"></i>
                  <input type="email" class="form-control" name=" " id="exampleInputEmail1" >
                  </div>
                  <div class="form-group"> 
                  <label for="exampleInputPassword1">Lugar de nacimiento</label>
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group"> 
                  <label for="exampleInputPassword2">provincia</label>
                  <i class="fa fa-check-square-o"></i>
                  <input type="password" class="form-control" name="provincia" id="exampleInputPassword2" >
                  </div>
                  <div class="form-group"> 
                  <label for="exampleInputPassword1">departamento</label>
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" name="" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group"> 
                  <label for="exampleInputPassword1">Lugar de nacimiento</label>
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group"> 
                  <label for="exampleInputPassword1">Lugar de nacimiento</label>
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-group"> 
                  <label for="exampleInputPassword1">Lugar de nacimiento</label>
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" id="exampleInputPassword1" >
                  </div>
                  <div class="form-actions">
                   <button type="submit" class="btn btn-success">Sign Up</button>
                  </div>
                </form>
                -->
                <div class="divide-20"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/REGISTER -->
  </div>
 -->
</div>
@stop
@section('pie')
          <div class="col-sm-4"><i class="fa fa-home"></i><a href="#">Inicio</a></div>
          <div class="col-sm-4"><i class="fa fa-graduation-cap"></i><a href="#">Programas</a></div>
          <div class="col-sm-4"><i class="fa fa-book"></i><a href="#">Contactos</a></div>
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

    