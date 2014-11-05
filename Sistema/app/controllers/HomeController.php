<?php

class HomeController extends BaseController {

    public function index()
    { 
       $oferta = DB::table('oferta')->get();
       return View::make('index')->with('offer', $oferta);
    }
}
