<?php 
namespace App\Models;

use CodeIgniter\Model;

class Materia extends Model{
    protected $table      = 'materia';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_materia';
    protected $allowedFields = ['id_materia', 'nombre_materia'];
}