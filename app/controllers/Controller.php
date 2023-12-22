<?php
require_once "../config/conex.php";
require_once "../models/Model.php";  

class Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function addTeam($name, $description,$founded_year)
    {
        $data = array(
            'name' => $name,
            'description' => $description,
            'founded_year' => $founded_year,

        );

        return $this->model->insertRecord('team', $data);
    }

    public function updateTeam($id,$name, $description,$founded_year)
    {
        $data = array(
            'name' => $name,
            'description' => $description,
            'founded_year' => $founded_year,

        );


        return $this->model->updateRecord('team', $data,$id);
    }

    public function deleteTeam($id)
    {
        return $this->model->deleteRecord('team', $id);
    }

    public function getTeam()
    {
        return $this->model->selectRecords('team', '*');
    }

    public function closeConnection()
    {
        $this->model->closeConnection();
    }
}
?>
