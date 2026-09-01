<?php
require_once(__DIR__ . "/../util/Connection.php");
require_once(__DIR__ . "/../model/Tipo.php");

class TipoDAO{

    public function list(){
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM tipos";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $dadosTipo = $stm->fetchALL();

        //return $this->map($dadosTipo) (daniel lore map)
        return $dadosTipo;
    }
}

//Map -> array pra objeto