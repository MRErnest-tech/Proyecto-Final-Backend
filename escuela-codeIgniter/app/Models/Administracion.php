<?php 
namespace App\Models;

use CodeIgniter\Model;

class Administracion extends Model{
    protected $table      = 'undefined';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['id_admin', 'id_persona'];
}