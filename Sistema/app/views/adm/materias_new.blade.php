@extends('layouts.adm')

@section('title') 
  @parent
@stop
@section('header')
	@parent
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
                        <li><a href="<?=URL::to('admi/programnew')?>">NUEVO</a></li>
                        <li><a href="<?=URL::to('admi/programshow')?>">VER TODOS</a></li>
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
        <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Current page</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumbs-alt">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a class="active-trail active" href="#">Pages</a>
                        </li>
                        <li>
                            <a class="current" href="#">Elements</a>
                        </li>
                    </ul>
                </div>
        </div>
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-primary">
                    <header class="panel-heading">
                        TODOS LOS PROGRAMAS
                    </header>
                    <div class="panel-body">
                        <section id="unseen">
                        @if($prog)
                                <div id="contacts" class="tab-pane ">
                                    <div class="col-md-6">
                                        <div class="prf-contacts">
                                            <h2> <span><i class="fa fa-graduation-cap"></i></span>Nombre del Programa</h2>
                                            <div class="location-info">                                              
                                                <p>{{$prog->nombre}}</p>
                                            </div>
                                            <h2> <span><i class="fa fa-graduation-cap"></i></span>Grado Academico</h2>
                                            <div class="location-info">
                                                <p>{{$tipo->nombre}}</p>
                                            </div>
                                            <h2> <span><i class="fa fa-graduation-cap"></i></span>Modalidad</h2>
                                            <div class="location-info">
                                                <p>{{$prog->modalidad}}</p>
                                            </div>
                                            <h2> <span><i class="fa fa-graduation-cap"></i></span>Version</h2>
                                            <div class="location-info">
                                                <p>{{$prog->versio}}</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                        </section>
                        <div>
                          <a class="btn btn-primary" data-toggle="modal" href="#myModal">
                           <i class="fa fa-plus"></i>
                                Registrar Convenio
                          </a>
                          <a class="btn btn-primary" data-toggle="modal" href="#myModal2">
                          <i class="fa fa-plus-square"></i>

                                Registrar Materias
                          </a>  
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Registrar convenio {{$prog->nombre}}</h4>
                                        </div>
                                        <div class="modal-body">

                                <form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=URL::to('admi/trabajofinalsave');?>">
                                 <fieldset>
                                        <input name="id"  type="TEXT" value="11"/>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Institucion</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="institucion"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Corresponsable</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="corresponsable"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Grado Academico</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="grado_academico"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Expedido por</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="expedido_por"  type="text" required />
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
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                                            <button class="btn btn-success" type="button">Guardar</button>
                                        </div>
                                    </div>
                                </div>                     
                          </div>
                          <!-- modal -->
                           <!-- Modal -->
                          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Registrar Materia al Programa</h4>
                                            <h5>{{$prog->nombre}}</h5>
                                        </div>
                                        <div class="modal-body">
                                <form class="cmxform form-horizontal" id="commentForm" method="post" action="<?=URL::to('admi/materiassave');?>">
                                    <fieldset>
                                    <input name="id"  type="TEXT" value="11"/>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Nombre del Modulo</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="nombre"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Total de Horas Presenciales</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="total_horas_presenciales"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Total de Horas no Presenciales</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="total_horas_no_presenciales"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Total de horas</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="total_horas"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Creditos</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="creditos"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Grupo</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="grupo"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Observaciones</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="observaciones"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Fecha de inicio</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="finicio"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cname" class="control-label col-lg-3">Fecha de finalizacion</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="ffin"  type="text" required />
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
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                                            <button class="btn btn-success" type="button">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                          </div>
                          <!-- modal -->
                        </div>
                     @else 
                            <h3>ocurrio un error</h3>
                            @endif
                        <br/><br/>
                        <button type="button" class="btn btn-primary"><i class="fa fa-cloud"></i> Cloud</button>
                        <button type="button" class="btn btn-success"><i class="fa fa-eye"></i> View </button>
                        <button type="button" class="btn btn-info "><i class="fa fa-refresh"></i> Update</button>
                        <button type="button" class="btn btn-default "><i class="fa fa-cloud-upload"></i> Upload</button>
                        <button data-toggle="button" class="btn btn-white">
                            <i class="fa fa-thumbs-up "></i>
                            89
                        </button>
                        <button data-toggle="button" class="btn btn-white">
                            <i class="fa fa-home"></i>
                        </button>
                        <br/><br/>
                        <div class="col-sm-12">
                         <section class="panel panel-info">
                            <header class="panel-heading">
                                Modulos Registrados
                            </header>
                            <div class="panel-body">
                                @if($modulos)
                                <section id="unseen">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nombre del Modulo</th>
                                            <th>T.H.Presenciales</th>
                                            <th>T.H. no Presenciales</th>
                                            <th>Total de horas</th>
                                            <th>Creditos</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; ?>
                                        @foreach($modulos as $modulo)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{$modulo->nombre}}</td>
                                            <td>{{$modulo->total_horas_presenciales}}</td>
                                            <td>{{$modulo->total_horas_no_presenciales}}</td>
                                            <td>{{$modulo->total_horas}}</td>
                                            <td>{{$modulo->creditos}}</td>
                                            <td>
                                            <a class="btn btn-primary btn-xs" data-toggle="modal" href="#myModal3">
                                            <i class="fa fa-plus"></i>Ver todo</a> <br/>
                                            <a class="btn btn-info btn-xs" href= "<?=URL::to("admi/docentenew/".$modulo->id_modulos)?>" title="Asigar Docente"><i class="fa fa-plus"></i>Asignar Docente</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                 <div class="modal-content">
                                                 <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title">Modulo:{{$modulo->nombre}}</h4>
                                                 </div>
                                                 <div class="modal-body">
                                                        {{$modulo->grupo}}
                                                        {{$modulo->observaciones}}
                                                        {{$modulo->estado}}
                                                        {{$modulo->fecha_inicio}}
                                                        {{$modulo->fecha_fin}}

                                                 </div>
                                                 <div class="modal-footer">
                                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                                                    <button class="btn btn-success" type="button">Guardar</button>
                                                 </div>
                                                 </div>
                                                </div>                     
                                            </div>
                                            <!-- modal -->
                                            </td>
                                           <?php $i++; ?>                                   
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </section>
                                @else 
                                <span>No existen modulos registrados</span>
                                @endif
                            </div>
                         </section>
                        </div>
                    </div>
                </section>
                <!-- page end-->
        <!-- page end-->
            </div>
        </div>
@stop
@section('menu-derecha')
    @parent
@stop
@section('pie');
      <footer class="footer-section">
          <div class="text-center">
              2014 &copy; DIRECCION DE POSTGRADO
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
   @parent
@stop
@section('footer')
	@parent
@stop