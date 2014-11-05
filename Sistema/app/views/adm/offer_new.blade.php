@extends('layouts.adm')

@section('title') 
  @parent
@stop
@section('header')
	@parent
     <?php
    echo HTML::style('assets/js/bootstrap-fileupload/bootstrap-fileupload.css'); 
    echo HTML::style('assets/js/bootstrap-datepicker/css/datepicker.css'); 
    echo HTML::style('assets/js/bootstrap-colorpicker/css/colorpicker.css');
    echo HTML::style('assets/js/jquery-tags-input/jquery.tagsinput.css'); 
    echo HTML::style('assets/js/bootstrap-colorpicker/css/colorpicker.css');
    echo HTML::style('assets/js/bootstrap-timepicker/compiled/timepicker.css');
    echo HTML::style('assets/js/bootstrap-daterangepicker/daterangepicker-bs3.css');
    echo HTML::style('assets/js/bootstrap-datetimepicker/css/datetimepicker.css');
    echo HTML::style('assets/js/jquery-tags-input/jquery.tagsinput.css');
    ?>
    
@stop
@section('menu-header-top')
    @parent 
    <!--NOTIFICACIONES-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">8</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="">You have 8 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>25% , Deadline  12 June’13</p>
                                    </div>
                                            <span class="notification-pie-chart pull-right" data-percent="45">
                                    <span class="percent"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Product Delivery</h5>
                                        <p>45% , Deadline  12 June’13</p>
                                    </div>
                                            <span class="notification-pie-chart pull-right" data-percent="78">
                                    <span class="percent"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Payment collection</h5>
                                        <p>87% , Deadline  12 June’13</p>
                                    </div>
                                            <span class="notification-pie-chart pull-right" data-percent="60">
                                    <span class="percent"></span>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>Target Sell</h5>
                                        <p>33% , Deadline  12 June’13</p>
                                    </div>
                                            <span class="notification-pie-chart pull-right" data-percent="90">
                                    <span class="percent"></span>
                                    </span>
                                </div>
                            </a>
                        </li>

                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">4</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p class="red">You have 4 Mails</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Jonathan Smith</span>
                                        <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hello, this is an example msg.
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/avatar-mini-2.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Jane Doe</span>
                                        <span class="time">2 min ago</span>
                                        </span>
                                        <span class="message">
                                            Nice admin template
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/avatar-mini-3.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Tasi sam</span>
                                        <span class="time">2 days ago</span>
                                        </span>
                                        <span class="message">
                                            This is an example msg.
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                                        <span class="subject">
                                        <span class="from">Mr. Perfect</span>
                                        <span class="time">2 hour ago</span>
                                        </span>
                                        <span class="message">
                                            Hi there, its a test
                                        </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">3</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>Notifications</p>
                        </li>
                        <li>
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #1 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-danger clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #2 overloaded.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-success clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#"> Server #3 overloaded.</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <!--FIN-->
        <!--PERFIL-->
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="assets/images/avatar1_small.jpg">
                        <span class="username">{{Auth::user()->username}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="<?=URL::to('logout');?>"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
                <li>
                    <div class="toggle-right-box">
                        <div class="fa fa-bars"></div>
                    </div>
                </li>
            </ul>
            <!--search & user info end-->
        </div>
        <!-- FIN -->
@stop
@section('menu-izquierda')
                @parent
                <li>
                <a class="active" href="<?=URL::to('admi/index')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>MENU ADMINISTRADOR</span>
                </a>
                </li>
                 <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>Programas</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/programnew')?>">LICENCIATURA</a></li>
                        <li><a href="<?=URL::to('admi/programshow')?>">DIPLOMADO</a></li>
                        <li><a href="<?=URL::to('admi/programshow')?>">MAESTRIA</a></li>
                        <li><a href="">ESPECIALIDAD</a></li>
                        <li><a href="">DOCTORADO</a></li>
                        <li><a href="">OTROS</a></li>
                    </ul>
                </li>
                 <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>NIVEL DE POSTGRADO</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/nivelpostnew')?>">Nuevo</a></li>
                        <li><a href="<?=URL::to('admi/nivelpostshow')?>">Mostrar</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>ESTUDIANTES</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/inscritosshow')?>">todos los inscritos</a></li>
                        <li><a href="">Acciones</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>DOCENTES</span>
                     </a>
                     <ul class="sub">
                        <li><a href="<?=URL::to('admi/docentenew')?>">NUEVO</a></li>
                        <li><a href="<?=URL::to('admi/docenteshow')?>">TODOS</a></li>
                     </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>PAGOS</span>
                     </a>
                     <ul class="sub">
                        <li><a href="<?=URL::to('admi/pagosnew')?>">NUEVO</a></li>
                        <li><a href="<?=URL::to('admi/pagoshow')?>">ver</a></li>
                     </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>ESTADISTICAS</span>
                    </a>
                    <ul class="sub">
                        <li><a href="">Morris</a></li>
                        <li><a href="">Chartjs</a></li>
                        <li><a href="">Flot Charts</a></li>
                        <li><a href="">C3 Chart</a></li>
                    </ul>
                </li> 
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span>USUARIOS</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/usersnew')?>">Nuevo</a></li>
                        <li><a href="<?=URL::to('admi/usersshow')?>">Mostrar</a></li>
                        <li><a href="<?=URL::to('admi/userssearch')?>">Busqueda</a></li>
                        <li><a href="<?=URL::to('admi/usersreport')?>">Repostes</a></li>
                    </ul>
                </li> 
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span>PERSONAL</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?=URL::to('admi/personalnew')?>">Nuevo</a></li>
                        <li><a href="<?=URL::to('admi/personalshow')?>">Mostrar</a></li>
                        <li><a href="<?=URL::to('admi/personalbuscar')?>">Busqueda</a></li>
                        <li><a href="<?=URL::to('admi/personalrep')?>">Repostes</a></li>
                    </ul>
                </li>   
                <li>
                    <a href="">
                        <i class="fa fa-user"></i>
                        <span>Reportes</span>
                    </a>
                </li>
                <li>
                    <a href="<?=URL::to('admi/')?>">
                        <i class="fa fa-user"></i>
                        <span>TRABAJOS</span>
                    </a>
                </li>
@stop
@section('content')
             <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel panel-primary">
                        <header class="panel-heading">
                            Registrar Ofertas de Programas
                        </header>
                        <div class="panel-body"> 
                            <div class="form">
                                <form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=URL::to('admi/offersave');?>">
                                    <fieldset>
                                    <div class="form-group">
                                        @if($prog)
                                        <label for="cname" class="control-label col-lg-3">Elegir Programa</label>
                                        <div class="col-lg-6">
                                               <select name="program" class="form-control input-sm m-bot15">
                                                @foreach($prog as $programa)
                                                <option value="{{$programa->idprograma}}">{{$programa->nombre}}</option>
                                                @endforeach
                                               </select>
                                        @else
                                        </div>
                                        <div class="col-lg-6">        
                                                <span> no hay datos para mostrar</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Estado</label>
                                        <div class="col-lg-6">
                                            <select name="estado" class="form-control input-sm m-bot15">
                                               <option value="A">ACTIVO</option>
                                               <option value="I">INACTIVO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">URL</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="url"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Estado</label>
                                        <div class="col-lg-6">
                                            <select name="estado" class="form-control input-sm m-bot15">
                                               <option value="A">ACTIVO</option>
                                               <option value="I">INACTIVO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Observaciones</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="obsevaciones"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Fecha Inicio</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="fecha_inicio"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Fecha Final</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="fecha_fin"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-round btn-success" type="submit">Guardar</button>
                                            <button class="btn btn-round btn-warning" type="button">Cancelar</button>
                                        </div>
                                    </div>
                                 </fieldset>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section class="panel">
                    <header class="panel-heading">
                        Advanced File Input
                          <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-cog" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <form action="#" class="form-horizontal ">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default</label>
                                <div class="col-md-4">
                                    <input type="file" class="default" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Without input</label>
                                <div class="controls col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" />
                                                </span>
                                        <span class="fileupload-preview" style="margin-left:5px;"></span>
                                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group last">
                                <label class="control-label col-md-3">Image Upload</label>
                                <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" />
                                                   </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-danger">NOTE!</span>
                                             <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading">
                        Datetime Pickers
                              <span class="tools pull-right">
                            <a class="fa fa-chevron-down" href="javascript:;"></a>
                            <a class="fa fa-cog" href="javascript:;"></a>
                            <a class="fa fa-times" href="javascript:;"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal  " action="#">
                            <div class="form-group">
                                <label class="control-label col-md-3">Default input Datetimepicker</label>
                                <div class="col-md-4">
                                    <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3"> Component Datetimepicker</label>
                                <div class="col-md-4">
                                    <div class="input-group date form_datetime-component">
                                        <input type="text" class="form-control" readonly="" size="16">
                                                <span class="input-group-btn">
                                                <button type="button" class="btn btn-primary date-set"><i class="fa fa-calendar"></i></button>
                                                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Advance Datetimepicker</label>
                                <div class="col-md-4">
                                    <div data-date="2012-12-21T15:25:00Z" class="input-group date form_datetime-adv">
                                        <input type="text" class="form-control" readonly="" size="16">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary date-reset"><i class="fa fa-times"></i></button>
                                            <button type="button" class="btn btn-warning date-set"><i class="fa fa-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Meridian Format</label>
                                <div class="col-md-4">
                                    <div data-date="2012-12-21T15:25:00Z" class="input-group date form_datetime-meridian">
                                        <input type="text" class="form-control" readonly="" size="16">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary date-reset"><i class="fa fa-times"></i></button>
                                            <button type="button" class="btn btn-warning date-set"><i class="fa fa-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                </div>
            </div>
            <!-- page end-->

@stop
@section('menu-derecha')
    @parent
@stop
@section('pie');
@stop
@section('footer')
<?php 
 echo HTML::script('assets/js/jquery.validate.min.js');
 echo HTML::script('assets/js/validation-init.js');
 echo HTML::script('assets/js/toggle-init.js');
 echo HTML::script('assets/js/advanced-form.js');

 echo HTML::script('assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js');
 echo HTML::script('assets/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js');
 
 echo HTML::script('assets/js/fuelux/js/spinner.min.js');
 echo HTML::script('assets/js/bootstrap-fileupload/bootstrap-fileupload.js');
 echo HTML::script('assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js');
 echo HTML::script('assets/js/bootstrap-daterangepicker/moment.min.js');
 echo HTML::script('assets/js/bootstrap-daterangepicker/daterangepicker.js');
 echo HTML::script('js/bootstrap-colorpicker/js/bootstrap-colorpicker.js');
 echo HTML::script('js/bootstrap-timepicker/js/bootstrap-timepicker.js');
 echo HTML::script('assets/js/jquery-multi-select/js/jquery.quicksearch.js');
 echo HTML::script('assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js');
 echo HTML::script('assets/js/jquery-tags-input/jquery.tagsinput.js');
?>
	@parent
@stop