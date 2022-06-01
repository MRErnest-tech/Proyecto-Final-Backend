<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Persona;
class Personas extends Controller{

    public function index()
    {
        $persona = new Persona();
        $datos['personas'] = $persona->orderBy('id_persona', 'ASC')->findAll();

        return view('Personas',$datos);
    }

    public function crear(){
        return view('Personas_Guardar');
    }

    public function guardar(){
        $libro = new Libro();
        $nombre= $this->request->getVar('nombre');
        $apellido_p= $this->request->getVar('apellido_p');
        $apellido_m= $this->request->getVar('apellido_m');
        $curp = $this->request->getVar('curp');
        $fecha_nac = $this->request->getDate('fecha_nac');
        $genero = $this->request->getEnum('genero');
        $fecha_actualizacion = $this->request->getDate('fecha_actualizacion');
        $activo = $this->request->getVar('activo');
        $datos = [
            'nombre'=> $nombre,
            'apellido_p'=> $apellido_p,
            'apellido_m' => $apellido_m,
            'curp' => $curp,
            'fecha_nac'=> $fecha_nac,
            'genero'=> $genero, 
            'fecha_actualizacion'=> $fecha_actualizacion,
            'activo' => $activo
        ];

        $libro->insert($datos);

        echo "Ingresado a la base de datos";
    }
}