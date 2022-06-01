<?php 
namespace App\Models;

use CodeIgniter\Model;

class Persona extends Model{
    protected $table      = 'persona';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_persona';
    protected $allowedFields = ['id_persona', 'nombre','apellido_p', 'apellido_m', 'curp','fecha_nac','genero','fecha_actualizacion','activo'];
}