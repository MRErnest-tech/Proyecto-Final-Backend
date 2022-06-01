<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Materia;
class Materias extends Controller{
    public function index(){
        $materia = new Materia();
        $datos['materias'] = $materias->orderBy('id_materia', 'ASC')->findAll();

        return($datos);
    }
}