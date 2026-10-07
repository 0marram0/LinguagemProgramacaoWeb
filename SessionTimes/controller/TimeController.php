<?php

require_once(__DIR__ . "/../model/Time.php");
require_once(__DIR__ . "/../service/TimeService.php");


class TimeController
{
    private TimeService $timeService;

    public function __construct() {
        $this->timeService = new TimeService();
    }

    public function validar(Time $time) {
        $erros = $this->timeService->validar($time);
        return $erros;
    }

    public function escolherJogadores (int $formacao) {
        return $this->timeService->montarTime($formacao);
    }

}
