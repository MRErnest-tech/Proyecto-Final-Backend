<?php 
namespace App\Models;

use CodeIgniter\Model;

class Rol extends Model{
    protected $table      = 'rol';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['id_rol','descripcion','id_persona','modulo'];
}