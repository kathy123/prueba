<?php 

class certController extends BaseController {

	public function __construct()
	{ 
		$this->beforeFilter('auth');
	}
	public function getIndex()
	{
		return View::make('certif.index');
	}
}