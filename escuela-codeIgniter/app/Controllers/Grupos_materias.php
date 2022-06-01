<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Grupo_Materia;
class Grupos_materias extends Controller{

    public function index(){
        $grupo = new Grupo_Materia();
        $datos['grupos'] = $grupo->orderBy('id_grupo', 'ASC')->findAll();

        $materia = new Materias();
        $profesores = new Profesores();
        
        if($grupos->id_profesor == $profesores->id_profesor)
        {
            return ('a');
        }

    }
}