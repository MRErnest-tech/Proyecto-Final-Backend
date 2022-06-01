<?php 
namespace App\Models;

use CodeIgniter\Model;

class Profesor extends Model{
    protected $table      = 'profesor';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_profesor';
    protected $allowedFields = ['id_persona', 'id_profesor', 'cedula','telefono', 'correo'];
}