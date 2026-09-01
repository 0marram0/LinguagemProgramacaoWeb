<?php
require_once(__DIR__ . "/../util/Connection.php");
require_once(__DIR__ . "/../model/Filme.php");

class FilmeDAO {
    
    public function list() {
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM filmes";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $dadosFilme = $stm->fetchALL();

        return $dadosFilme;
    }
}

?>