<?php
require_once(__DIR__ . "/../util/Connection.php");
require_once(__DIR__ . "/../model/Personagem.php");

class PersonagemDAO {
    
    public function list() {
        $conn = Connection::getConnection();

        $sql = "SELECT p.*, t.nome nome_tipo, f.titulo titulo_filme
                FROM personagens p 
                JOIN tipos t ON (t.id = p.id_tipo)
                JOIN filmes f ON (f.id = p.id_filme)";

        $stm = $conn->prepare($sql);
        $stm->execute();
        $dadosPersonagem = $stm->fetchALL();

        return $dadosPersonagem;
    }

}

?>