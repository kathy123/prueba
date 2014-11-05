@extends('layouts.adm')

@section('title') 
  @parent
@stop 
@section('header')
	@parent
     <?php
    echo HTML::style('assets/js/iCheck/skins/minimal/green.css'); 
    echo HTML::style('assets/js/iCheck/skins/minimal/blue.css'); 

    echo HTML::style('assets/js/iCheck/skins/square/green.css'); 
    echo HTML::style('assets/js/iCheck/skins/square/blue.css'); 

    echo HTML::style('assets/js/iCheck/skins/flat/green.css'); 
    echo HTML::style('assets/js/iCheck/skins/flat/blue.css'); 
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
                    <li><a href="#"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i>Configuraciones</a></li>
                    <li><a href="<?=URL::to('logout');?>"><i class="fa fa-key"></i>Desconectar</a></li>
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
                        <span>GRADOS ACADEMICOS</span>
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
                    <div class="panel panel-primary">
                        <header class="panel-heading">
                            Registrar Programa de Postgrado
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" action="<?=URL::to('admi/programsave');?>">                                                                  
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Grado Academico del Postgrado</label>
                                        <div class="col-lg-6">
                                            @if($grado)
                                               <select name="gradoapos" id="focusedInput" class="form-control input-sm m-bot15" required> 
                                               @foreach($grado as $gradop)
                                               <option value="{{$gradop->idgpostgrado}}">{{$gradop->nombre}}</option>
                                               @endforeach
                                               </select>
                                            @else
                                               <div class="col-lg-6">        
                                                <span>no hay datos para mostrar</span>
                                               </div>
                                              @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Nombre del Programa</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="focusedInput" name="nombre" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Version</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="focusedInput" name="versio"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Mencion</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="focusedInput" name="mencion"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Modalidad del Programa</label>
                                        <div class="col-lg-6">
                                               <select name="modalidad" id="focusedInput" class="form-control input-sm m-bot15" required> 
                                               <option>PRESENCIAL</option>
                                               <option>SEMIPRESENCIAL</option>
                                               <option>FORMACION A DISTANCIA</option>
                                               </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Unidad Encargada</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="focusedInput" name="unidad_encargada"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Sede</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="sede" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Nota de Aprobacion</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="nota_de_aprobacion" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Maximo de Alumnos</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="maximo_de_alumnos" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Costo del Programa</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="costo" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Carga Horaria</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="carga_horaria" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Creditos</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="creditos" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Fecha de Inicio</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="finicio" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Fecha Finalizacion</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="ffin" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Estado</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="estado" required />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Responsable</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="responsable" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Grado Academico del Responsable</label>
                                    <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="gradacadrespons" required />
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Modalidad de Graduacion</label>
                                        <div class="col-lg-6">
                                            <select name="modalidadgr" id="focusedInput" class="form-control input-sm m-bot15" required> 
                                            <option value="MONOGRAFIA">MONOGRAFIA</option>
                                            <option value="MONOGRAFIA">TRABAJO DE GRADO</option>
                                            <option value="MONOGRAFIA">TESIS MAGISTRAL</option>
                                            <option value="MONOGRAFIA">TESIS DOCTORAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Modalidad de Admision</label>
                                    <div class="col-lg-6">
                                            <input class="form-control " id="focusedInput" type="comment" name="modalidad_admision" required />
                                    </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Requisitos</label>
                                    <div class="col-lg-6">
                                            <textarea class="form-control " id="focusedInput" type="comment" name="requisitos" required ></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Objetivo General</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="focusedInput" type="comment" name="objetivo_general" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Objetivos Especificos</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="focusedInput" type="comment" name="objetivos_especificos" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Perfil</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="focusedInput" type="comment" name="perfil" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                           <label for="cname" class="control-label col-lg-3">Condiciones de Permanencia</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="focusedInput" type="comment" name="condiciones_permanencia" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ccomment" class="control-label col-lg-3">Observaciones</label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control " id="focusedInput" type="comment" name="observaciones" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-info" type="submit"><i class="fa fa-floppy-o"></i>Guardar</button>
                                            <button class="btn btn-warning" type="button"><i class="fa fa-times"></i>Cancelar</button>
                                            <button type="button" class="btn btn-info "><i class="fa fa-refresh"></i> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page end-->
           
                    <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Portlet 2
                                <span class="tools pull-right">
                                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="fa fa-cog" href="javascript:;"></a>
                                    <a class="fa fa-times" href="javascript:;"></a>
                                </span>
                                    </div>

                                    <div class="panel-body">
                                        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                        Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                                        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                        Cras mattis consectetur purus sit amet fermentum. Duis mollis. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                        Cras mattis consectetur purus sit amet fermentum. Duis mollis.
                                    </div>
                            </div>

                    </div>
            </div>
                    

@stop
@section('menu-derecha')
    @parent
@stop
@section('pie');
@stop
@section('footer')
<?php 
 echo HTML::script('assets/js/iCheck/jquery.icheck.js');
 echo HTML::script('assets/js/icheck-init.js');
 echo HTML::script('assets/js/jquery.validate.min.js');
 echo HTML::script('assets/js/validation-init.js');
?>
	@parent
@stop