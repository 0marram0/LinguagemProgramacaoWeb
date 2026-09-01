<?php
require_once(__DIR__ . "/../dao/FilmeDAO.php");
require_once(__DIR__ . "/../model/Filme.php");
require_once(__DIR__ . "/../service/FilmeService.php");

class FilmeController{
    private FilmeDAO $filmeDAO;
    private FilmeService $filmeService;

    public function __construct() {
        $this->filmeDAO = new FilmeDAO();
        $this->filmeService = new FilmeService();
    }

    public function listar (){
        return $this->filmeDAO->list();
    }
}

?>