<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Alumno;
class Alumnos extends Controller{
    
    public function index(){
        $alumno = new Alumno();
        $datos['alumnos'] = $alumno->orderBy('id_alumno', 'ASC')->findAll();

        $persona = new Persona();
        if($alumnos->id_alumno == $persona->id_persona)
        {
            return ('a');
        }
        
    }
    
}