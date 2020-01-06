<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "desenv";
    protected $primaryKey = "ID";
    protected $allowedFields = ["NOME","SOBRENOME","EMPREGO","IDADE"];
    protected $returntype = 'App\Entities\desenv';
}