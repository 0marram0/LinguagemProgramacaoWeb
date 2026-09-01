<?php
require_once(__DIR__ . "/../dao/PersonagemDAO.php");
require_once(__DIR__ . "/../model/Personagem.php");
require_once(__DIR__ . "/../service/PersonagemService.php");

class PersonagemController {
    private PersonagemDAO $personagemDAO;
    private PersonagemService $personagemService;

    public function __construct() {
        $this->personagemDAO = new PersonagemDAO();
        $this->personagemService = new PersonagemService();
    }

    public function listar () {
        return $this->personagemDAO->list();
    }

}


?>