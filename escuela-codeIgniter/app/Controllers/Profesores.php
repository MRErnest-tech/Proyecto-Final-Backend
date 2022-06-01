<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Profesor;
class Profesores extends Controller{

    public function index(){
        $profesor = new Profesor();
        $datos['profesores'] = $profesor->orderBy('profesor', 'ASC')->findAll();

        $persona = new Persona();
        if($profesores->id_profesor == $persona->id_persona)
        {
            return ('a');
        }
        
    }
    
}