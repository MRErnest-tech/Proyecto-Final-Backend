<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Persona;
class Personas extends Controller{

    public function index()
    {
        $persona = new Persona();
        $datos['personas'] = $persona->orderBy('id_persona', 'ASC')->findAll();

        return ($datos);
    }
}