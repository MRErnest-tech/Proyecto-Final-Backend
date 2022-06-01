<?php 
namespace App\Models;

use CodeIgniter\Model;

class Calificacion_Alumno extends Model{
    protected $table      = 'calificacion_alumno';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_alumno';
    protected $allowedFields = ['id_alumno','id_grupo_materia','calificacion', 'fecha_cal','fecha_inscripcion','id_admin'];
}