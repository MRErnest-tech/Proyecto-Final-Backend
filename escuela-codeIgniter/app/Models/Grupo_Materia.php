<?php 
namespace App\Models;

use CodeIgniter\Model;

class Grupo_Materia extends Model{
    protected $table      = 'grupo_materia';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_grupo';
    protected $allowedFields = ['id_grupo','id_materia_grupo', 'id_profesor_grupo', 'semestre', 'id_admin', 'fecha_actualizacion'];
}