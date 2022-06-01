<?php 
namespace App\Models;

use CodeIgniter\Model;

class Modulo extends Model{
    protected $table      = 'modulo';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_modulo';
    protected $allowedFields = ['id_modulo','descripcion'];
}