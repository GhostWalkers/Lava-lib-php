<?php
class Handler
{
    public $jwt;
    public $map;
    public function __construct($jwt)
    {
        $this->jwt = $jwt;
        $this->map = new urlMap();
    }

    public function MethodsHandler($nameMethod, $data = null)
    {
        $url = $this->map->getUrlMethod($nameMethod);
        return $this->request($url, $data);
    }

    private function request($url, $data = false)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.lava.ru/'.$url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->jwt);
        $response = json_decode(curl_exec($ch),true);
        curl_close($ch);
        return $response;
    }
}