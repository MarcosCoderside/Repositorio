<?php namespace App\Controllers;

class Server extends BaseController
{
    public function ajax()
    {
        $db  = \Config\Database::connect();
        $query = $db->query("SELECT * FROM DESENV");
        $results = $query->getResult();
        $data = [];
        foreach($results as $row)
        {
            $data[] = [
                $row->ID,
                $row->NOME,
                $row->SOBRENOME,
                $row->EMPREGO,
                $row->IDADE
            ];
        }
        
        echo json_encode([
            "draw" => 1,
            "recordsTotal" => 200,
            "recordsFiltered" => 100,
            "data" => $data,
            "error" => ""
        ]);
    }
}