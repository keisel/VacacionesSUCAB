<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VistaController extends Controller
{
    
    public function inicio()
    {
    return view('portal/airucab-inicio');
    }
    public function registro()
    {
    	return view('portal/airucab-registro');
    }
    public function sedes()
    {
    	return view('portal/airucab-sedes');
    }
    public function pruebas()
    {
    	return view('portal/airucab-pruebas');
    }
    public function materiaPrima()
    {
    	return view('portal/airucab-materiaPrima');
    }
    public function diseñoAvion()
    {
    	return view('portal/airucab-dAvion');
    }
    
    

}
