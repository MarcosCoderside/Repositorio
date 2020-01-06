<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Entities\desenv;

use App\Models\EnderecoModel;
use App\Entities\endereco;


class Users extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function users()
    {       
     try
     {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM DESENV";
        $query = $db->query($sql);
        $results = $query->getResultArray();
        $data = ['title' => 'Usuários',
                 'results' => $results,
                 'success' => 'new users'];
         
                 echo view('users',$data);
     }catch(\Exception $ex)
     {
         var_dump($ex->getMessage());
     }
        
    }

    public function insert()
    {
        try
        {
            $model = new UsersModel();
            $data = $this->request->getPost();
            $entities = new desenv();
            $entities->fill($data);
            $model->save($entities);    
            return redirect()->to('users');
        }catch(\Exception $ex)
        {
            var_dump($ex->getMessage());
        }
        
    }

    public function endereco()
    {
        echo view('endereco');
    }

    public function enderecolist()
    {
        try
        {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM endereco";
        $query = $db->query($sql);
        $results = $query->getResultArray();
        $data = ['results' => $results];
        echo view('enderecolist',$data);
        }catch(\Exception $ex)
        {    
            var_dump($ex->getMessage());
        }
    }

    public function insertEndereco()
    {
        try
        {
            $model = new EnderecoModel();
            $data = $this->request->getPost();
            $entities = new endereco();
            $entities->fill($data);
            $model->save($entities);
            return redirect()->to('enderecolist');
        }
        catch(\Exception $ex)
        {
            var_dump($ex->getMessage());
        }
    }

    public function EndUsers()
    {
    try
        {
            $db = \Config\Database::connect();
            $sql = "SELECT desenv.NOME as NOME,desenv.SOBRENOME AS SOBRENOME,desenv.EMPREGO AS EMPREGO,desenv.IDADE AS IDADE,ENDERECO.cidade AS CIDADE,ENDERECO.ENDERECO AS ENDERECO,ENDERECO.BAIRRO AS BAIRRO,ENDERECO.CEP AS CEP,ENDERECO.LOGRADOURO AS LOGRADOURO,ENDERECO.numero from endereco INNER JOIN desenv ON desenv.ID = endereco.ID";
            $query = $db->query($sql);
            $results = $query->getResultArray();
            $data = ['results' => $results];
            echo view('EndUsers',$data);
        }
        catch(\Exception $ex)
        {
            $ex->getMessage();
        }        
    }

    


}