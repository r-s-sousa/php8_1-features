<?php

namespace app\exemplos;

use app\classes\helpers;

require_once __DIR__ . '/../../vendor/autoload.php';

enum Status
{
    case recebido;
    case confirmado;
    case finalizado;
}

class pedido
{
    public function __construct(private Status $status)
    {
    }

    public function mostrarStatus()
    {
        echo 'Status atual: ' . $this->status->name;
        helpers::adicionarQuebraDeLinha();
    }

    public function mudarStatus(Status $status)
    {
        $this->status = $status;
    }

    public function verificaSeEstaFinalizado(): void
    {
        if ($this->status == Status::finalizado) {
            echo 'pedido finalizado';
            return;
        }
        echo 'pedido ainda não foi finalizado';
        helpers::adicionarQuebraDeLinha();
    }
}

$obPedido = new pedido(status: Status::recebido);
$obPedido->mostrarStatus();
$obPedido->verificaSeEstaFinalizado();

$obPedido->mudarStatus(status: Status::confirmado);
$obPedido->mostrarStatus();
$obPedido->verificaSeEstaFinalizado();

$obPedido->mudarStatus(status: Status::finalizado);
$obPedido->mostrarStatus();
$obPedido->verificaSeEstaFinalizado();


