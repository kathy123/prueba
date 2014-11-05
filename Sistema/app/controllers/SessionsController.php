<?php
class SessionsController extends BaseController {

	public function create()
	{ 
		return View::make('login');
	}

	public function login()
	{
		$userdata = array(
			'username'=> Input::get('username'),
            'password'=> Input::get('password')
	    );
      
		if(Auth::attempt($userdata))
		{
			/*nuevo funciona :) cuando inicia session le bota a su menu segun su rol*/
			if(Auth::user()->estado == 'A')
        	{
	            switch (Auth::user()->idroles) 
	            { 
	            	case '1':{
	            		return Redirect::to('admi/index');
	            	};break;
	            	case '2':{
	            		return Redirect::to('adm');
	            	};break;
	            	case '3':{
	            		return Redirect::to('coord/index');
	            	};break;
	            	case '4':{
	            		return Redirect::to('controlpagos/index');
	            	};break;
	            	case '5':{
	            		return Redirect::to('aut/index');
	            	};break;
	            }
	        } 
            /*nuevo*/
			/*return Redirect::to('usuario');*/
			/*return Redirect::to('personal');*/
		}
		else
		{   //retorna al formulario del login
			return Redirect::to('login')->with('login_errors', true);
		}
		 
	}
	public function logout()
	{
		//Desconctamos al usuario
        Auth::logout();
        //Redireccionamos al inicio de la app con un mensaje
        return Redirect::to('/');
	}
}
