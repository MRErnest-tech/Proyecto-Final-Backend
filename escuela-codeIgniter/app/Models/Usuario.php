<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'usuario';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['id_usuario','constraseña','id_rol'];
}