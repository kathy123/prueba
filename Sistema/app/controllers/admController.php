<?php   

class admController extends BaseController {

	public function __construct()
	{ 
		$this->beforeFilter('auth');
	}
	public function getIndex()
	{
		return View::make('adm.index');
	}
    public function getUsersnew()
    {
        return View::make('adm.users_new');
    }
    public function getUsersshow()
    {
        $usuarios = DB::table('users')->get();  

        return View::make('adm.users_show')->with('usu', $usuarios);
    }
    public function postUsersedit($id)
    {
       // $usuarios = DB::table('users')->get();
       //editar usuario
        return View::make('adm.users_show');
    }
    public function postUsersbane($id)
    {
       // $usuarios = DB::table('users')->get();
       // dar de  baja al usuario
        return View::make('adm.users_show');
    }


    public function getDegreenew()
    {    
        return View::make('adm.degree_new');
    }
     public function postDegreesave()
    {   
       /* $t= Input::get('trabajo');
        $trab = DB::table('tipotrabajo')
        ->where('tipotrabajo.nombre','=', $t)
        ->select('idtt')
        ->get();*/
        //aqui hay un error no me recupera
        $date = new DateTime(); 
        DB::table('gradopostgrado')->insert(
            array( 
                'nombre' => Input::get('nombre'),
                'estado' => 'A',
                'grado_acad' => Input::get('gradoa'),
                'hpm' => Input::get('hpm'),
                'hnpm' => Input::get('hnpm'),
                'thm' => Input::get('thm'),
                'creditos' => Input::get('creditos'),
                'trabajo_final' => Input::get('trabajo_final'),
                'created_at' => $date->format('d/m/Y'),
                'updated_at' => $date->format('d/m/Y'),
            )
        );
        return Redirect::to('admi/degreeshow');
    }
    public function getDegreeshow()
    {   /*  un tip para cifrar url de id
             Crypt::encrypt($id) para cifrar
             Crypt::decrypt($valor_cifrado) para descifrar
        */
        
        $post = DB::table('gradopostgrado')->get();
        return View::make('adm.degree_show')->with('postg', $post);
    }
    public function getDegreedit()
    {
        $post = DB::table('tipopostgrado')->get();
        return View::make('adm.nivel_edit')->with('postg', $post);
    }
    /*
    public function getTrabajofinalnew()
    {    
        $trabajo = DB::table('tipotrabajo')->get();
        return View::make('adm.trabajofinal_new')->with('tra', $trabajo);
    }
     public function postTrabajofinalsave()
    {   
        $date = new DateTime(); 
        DB::table('tipotrabajo')->insert(
            array( 
                'nombre' => Input::get('nombre'),
                'estado' => 'A',
                'created_at' => $date->format('d/m/Y'),
                'updated_at' => $date->format('d/m/Y')
            )
        );
        return Redirect::to('admi/trabajofinalnew');
    }

    public function postTfedit($id)
    {    
        return Redirect::to('admi/trabajofinalnew');
    }
    public function postTfbane($id)
    {    
      return Redirect::to('admi/trabajofinalnew');
    }*/
    public function getPerfil()
    {   
        return View::make('adm.perfil');
    }
    public function getProgramnew()
    {   
        $grado =DB::table('gradopostgrado')->get();
        return View::make('adm.program_new')->with('grado', $grado);
    }
     public function postProgramsave()
    {   
        $date = new DateTime();
      /*$postgrado = Input::get('postg');
        $idp = DB::table('postgrado')
             ->select('idpostgrado')
             ->where('nombre','=',$postgrado)
             ->get();*/
             $n = Input::get('nombre');
             $v = Input::get('version');
        DB::table('programa')->insert(
            array(
                'nombre' => Input::get('nombre'),
                'modalidad' => Input::get('modalidad'),
                'versio' => Input::get('versio'),
                'unidad_encargada' => Input::get('unidad_encargada'),
                'sede' => Input::get('sede'),
                'nota_de_aprobacion'=> Input::get('nota_de_aprobacion'),
                'maximo_de_alumnos' => Input::get('maximo_de_alumnos'),
                'responsable' => Input::get('responsable'),
                'observaciones' => Input::get('observaciones'),
                'carga_horaria' => Input::get('carga_horaria'),
                'creditos' => Input::get('creditos'),
                'modalidad_graduacion' => Input::get('modalidadgr'),
                'estado' =>'A',
                'fecha_inicio'=>Input::get('finicio'),
                'fecha_fin'=>Input::get('ffin'),
                'updated_at' =>$date->format('d/m/Y'),
                'created_at'=> $date->format('d/m/Y'),
                'costo' => Input::get('costo'),
                'mencion' => Input::get('mencion'),
                'gradacadrespons' => Input::get('gradacadrespons'),
                'modalidad_admision'=> Input::get('modalidad_admision'),
                'requisitos' => Input::get('requisitos'),
                'objetivo_general' => Input::get('objetivo_general'),
                'objetivos_especificos' => Input::get('objetivos_especificos'),
                'perfil'=> Input::get('perfil'),
                'condiciones_permanencia'=> Input::get('condiciones_permanencia'),
                'idgpostgrado' => Input::get('gradoapos'),//recuperar de grado de postgrado          
            )
        );
        return Redirect::to('admi/programshow');
    }

    public function postProgramver($id)
    {
       // $programa = DB::table('programa')->get();
        return 'hola';
    }

    public function getProgramshow()
    {
        /*$programa = DB::table('programa')->where('idprograma','11')->first();*/
        $programa = DB::table('programa')->get();
        return View::make('adm.program_show')->with('prog', $programa);
    }
    public function getProgramsver()
    {
        $programa = DB::table('programa')
            ->join('tipopostgrado', 'tipopostgrado.idpostgrado', '=', 'programa.idpostgrado')
            ->select('programa.idprograma as id', 'programa.nombre as nombrep', 'programa.modalidad as modalidad', 'programa.versio as version', 'tipopostgrado.nombre as gradoacademico')
            ->get();
        /*$programa = DB::table('programa')->where('idprograma','11')->first();*/
        
        //$programa = DB::table('programa')->get();
        return View::make('adm.programshow')->with('prog', $programa);

    }
    public function postConvenionew()
    { 
        return Redirect::to('admi/programver/');
    }
    public function getOffernew()
    { 
       $programa = DB::table('programa')
            ->get();
        return View::make('adm.offer_new')->with('prog', $programa);
    }
    public function postOffersave()
    { 
        $date = new DateTime();       
        DB::table('oferta')->insert(
            array(
                'url' => Input::get('url'),
                'estado' => Input::get('estado'),
                'observaciones' => Input::get('obsevaciones'),
                'fecha_inicio' => Input::get('fecha_inicio'),
                'fecha_fin' => Input::get('fecha_fin'),
                'idprograma' => Input::get('program'),
                'updated_at' => $date->format('d/m/Y'),
                'created_at' => $date->format('d/m/Y'),    
            )
        );
        return Redirect::to('admi/offershow');
    }
    public function getOffershow()
    { 
       $oferta = DB::table('oferta')->get();
        return View::make('adm.offer_show')->with('offer', $oferta);
    }
    public function getMateriasnew($id)
    { 
        //$idprograma=&$id;
        $prog = DB::table('programa')->where('idprograma','=', $id)->first();
        $tipo = DB::table('tipopostgrado')->where('idpostgrado','=', $prog->grado_academico)->first();
        $modulos = DB::table('modulos')->where('idprograma','=',$id)->get();
        return View::make('adm.materias_new')->with(array('prog'=> $prog, 'tipo' => $tipo,'modulos' => $modulos));

    }
    public function postMateriassave()
    {   // program::find(@id):
        //http://www.youtube.com/watch?v=2LHVWIvI97s
        $p=Input::get('id');
         $date = new DateTime();       
        DB::table('modulos')->insert(
            array(
                'nombre' => Input::get('nombre'),
                'total_horas_presenciales' => Input::get('total_horas_presenciales'),
                'total_horas_no_presenciales' => Input::get('total_horas_no_presenciales'),
                'total_horas' => Input::get('total_horas'),
                'creditos' => Input::get('creditos'),
                'grupo' => Input::get('grupo'),
                'observaciones' => Input::get('observaciones'),
                'idprograma' => Input::get('id'),
                'updated_at' => $date->format('d/m/Y'),
                'created_at' => $date->format('d/m/Y'),
                'estado' => 'I',  
                'fecha_inicio' => Input::get('finicio'),
                'fecha_fin' => Input::get('ffin')
            )
        );
        return Redirect::to('admi/materiasnew/'.$p);
    }
   /* public function getMateriasedit($id)
    {   // program::find(@id):
        //http://www.youtube.com/watch?v=2LHVWIvI97s      
        $modulo = DB::table('modulo')->get();
        return View::make('admi/materiasnew/')->with('mod',$modulo);
    }
    public function getMateriasupdate($id)
    {   // program::find(@id):
        //http://www.youtube.com/watch?v=2LHVWIvI97s      
        $input = Input::all();
        $modulo = Post::find($id);
        $modulo ->nombre=$input['nombre'];
        $modulo ->versio=$input['version']; 
        $modulo->save();
     return Redirect::to('admi/programshow');
    }
    public function getMateriasdestroy($id)
    {   
        $modulo = modulo::find($id);
        $post->delete();
     return Redirect::to('admi/programshow');
    }
    */
    public function getDocentenew()
    {
      /*  $eventos = DB::table('eventos')
            ->join('users', 'users.id', '=', 'eventos.users_id')
            ->select('eventos.id', 'eventos.name', 'eventos.date', 'users.username', 'users.id as usuario')
            ->get();
       
       // $eventos = json_encode($eventos);

        $lic = DB::table('programa')
            ->join('tipopostgrado','tipopostgrado.id', '=', 'programa.id')
            ->select('programa.id', 'programa.nombre', 'programa.estado','programa.modalidad') 
            ->get();*/
        return View::make('adm.docente_new');
    } 

    public function postDocentesave()
    {
        return Redirect::to('admi/docenteshow');
    }
    public function postDocenteshow()
    {
        return View::make('adm.docente_show');
    }
    public function getInscritosshow()
    {
        return View::make('adm.inscritos_show');
    }
    public function getPagosnew()
    {
        return View::make('adm.pago_new');
    }
    public function postPagossave()
    {
       return Redirect::to('admi/pagoshow');
    }
    public function postPagoshow()
    {
        return View::make('adm.pago_show');
    }
    public function Tiponew()
    {
          return View::make('admi.tipo_new');
    }
    public function getTiposhow()
    {
        return View::make('admi.tipo_show');
    }
    
   /* public function getTiposhow()
    {
      auth
      confirmed
      estado 
      mnethostid 
      username 
      password 
  idnumber 
  firstname
  lastname 
  email 
  icq 
  aim 
  phone1 
  phone2 
  institution 
  department 
  address 
  city 
  country
  lang 
  timezone 
  firstaccess 
  lastaccess 
  lastlogin 
  currentlogin
  lastip 
  description
  mailformat 
  maildisplay
  htmleditor 
  autosubscribe
  id_depto 
  id_prov 
  id_estado_civil
  fec_nac date
  updated_at
  created_at
  remember_token
      
        return View::make('admi.tipo_show');
    }

*/

    public function getPersonal()
    {
        $personal = DB::table('personal')->get();

        return View::make('adm.personal')->with('personal', $personal);
    }

    public function postPersonalnew()
    {
        return View::make('adm.personal_new');
    }    

    public function postPersonalnewsave()
    {
        /*DB::table('personal')->insert(
            arrary(
                'ci' => Input::get('ci')
            )
        );*/
        return Redirect::to('admi/personal');
    }

    public function getPersonaledit($id)
    {
        $persona = DB::table('personal')
        ->where('id', '=', $id)
        ->get();
        
        return View::make('adm.personal_edit')->with('persona', $persona);
    }

    public function postPersonaleditsave()
    {
        /*$id = Input::get('id');
        DB::table('personal')->where('id', $id)
        ->update
            arrary(
                'ci' => Input::get('ci'),
            )
        );*/
        return Redirect::to('admi/personal');
    }
/*
	public function getEventos()
	{

		return View::make('event');
	}

    public function postEventosedit($id)
    {
        $eventos = DB::table('eventos')
            ->join('users', 'users.id', '=', 'eventos.users_id')
            ->select('eventos.id', 'eventos.name', 'eventos.date', 'users.username', 'users.id as usuario')
            ->get();

        $eventos = json_encode($eventos);
        return View::make('event');
    }


	public function contactos()
	{

		return View::make('contact');
	}
	public function info()
	{

		return View::make('inf');
	}
     public function usuariosregitrados()
     {
        return Redirect::to('/usuario');
     }
    // aumentar todas la funciones que realiza el administrador
     public function programas()
     {
        return Redirect::to('/usuario');
     }
     public function usuarios()
     {
        return Redirect::to('/usuario');
     }
     public function estudiantes()
     {
        return Redirect::to('/usuario');
     }
      public function docentes()
     {
        return Redirect::to('/usuario');
     }
*/
}