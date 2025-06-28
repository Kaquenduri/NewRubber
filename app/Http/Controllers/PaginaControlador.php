<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaControlador extends Controller
{
    #Muestra la pagina de inicio de la empresa New Rubber
    public function index()
    {
        return view('actividades.index');
    }
}
