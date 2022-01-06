<?php

interface EmailSend
{
    public function send();
}

class sendGrid implements EmailSend
{

    public function send()
    {
        echo 'enviado com sendGrid' . PHP_EOL;
    }
}

class nullEmailSend implements EmailSend
{
    public function send()
    {
        echo 'enviado com objeto nulo' . PHP_EOL;
    }
}

class servico
{
    private EmailSend $emailSend;

    public function __construct(EmailSend $emailSend = new nullEmailSend())
    {
        $this->emailSend = $emailSend;
    }

    public function send()
    {
        $this->emailSend->send();
    }
}

$obServico = new servico();
$obServico->send();

$obServicoReal = new servico(new sendGrid());
$obServicoReal->send();
