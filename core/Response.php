<?php

namespace App\Core;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
        exit;
    }

    public function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    public function setHeader(string $key, string $value)
    {
        header("$key: $value");
    }
}
