<?php
class urlMap
{
    public function getUrlMethod($name)
    {
        return [
            'ping' => 'test/ping',
        ][$name];
    }
}