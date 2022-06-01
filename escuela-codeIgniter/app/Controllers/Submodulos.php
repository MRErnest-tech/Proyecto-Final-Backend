<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Submodulo;
class Submodulos extends Controller{

    public function index()
    {
        $submodulo = new Submodulo();
        $datos['submodulos'] = $submodulo->orderBy('id_submodulo', 'ASC')->findAll();

        $modulos = new Modulos();

        if($submodulos->id_modulo == $modulos->id_modulo)        
        {
            return('a');
        }
    }
}