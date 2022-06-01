<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Calificacion_Alumno;
class Calificaciones_Alumno extends Controller{

    public function index(){
        $calificacion = new Calificacion_Alumno();
        $datos['calificaciones'] = $calificacion->orderBy('id_alumno', 'ASC')->findAll();

        $grupos_materias = new Grupos_materias();
        
        if($calificaciones->id_grupo_materia == $grupos_materias->id_grupo)
        {
            return ('a');
        }

    }
}