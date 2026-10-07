<?php 

require_once(__DIR__ . "/../model/Jogador.php");
require_once(__DIR__ . "/../dao/JogadorDAO.php");


class JogadorController {

    private JogadorDAO $jogadorDAO;

    public function __construct() {
        $this->jogadorDAO = new JogadorDAO();
    }

    public function verificarExistencia(Jogador $jogador) {
        $jogadorExiste = $this->jogadorDAO->buscaPorNome($jogador);

        if (! $jogadorExiste) {
            return false;
        } else {
            return true;
        }
    }

    public function inserir (Jogador $jogador){
       
        if ($this->verificarExistencia($jogador) == false) {
            $this->jogadorDAO->insert($jogador);
        } else {
            return;
        }
    }
}