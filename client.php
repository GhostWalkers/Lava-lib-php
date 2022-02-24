<?php
class Client
{
    public $handler;
    public function __construct($jwt)
    {
        $this->handler = new Handler($jwt);
    }

    public function ping()
    {
        return $this->handler->MethodsHandler('ping');
    }
}