<?php 
namespace App\Models;

use CodeIgniter\Model;

class Alumno extends Model{
    protected $table      = 'alumno';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_alumno';
    protected $allowedFields = ['id_persona','id_alumno', 'generacion'];
}