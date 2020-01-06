<?php namespace App\Models;

use CodeIgniter\Model;

class EnderecoModel extends Model{
    
    protected $table = 'endereco';

    protected $primaryKey = 'ID';

    protected $allowedFields = ['CIDADE','ENDERECO','ID','BAIRRO','LOGRADOURO','CEP','NUMERO'];
}