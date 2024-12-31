<?php

namespace Helper;
use App\Controller;
class RouteHelper {
    
    static function get(string $uri, string $controller_name, string $name): void
    {
        header('content-type:application/json');
        if($_SERVER['REQUEST_URI'] == $uri && $_SERVER['REQUEST_METHOD'] == "GET"){
            $controller_name::$name();
        } else if($_SERVER["REQUEST_URI"] != $uri && $_SERVER["REQUEST_METHOD"] != "GET"){
            RouteHelper::methodWrong("POST");
        }
    }

    static function post(string $uri, string $controller_name, string $name): void 
    {
        header('content-type:application/json');
        if($_SERVER['REQUEST_URI'] == $uri && $_SERVER['REQUEST_METHOD'] == "POST"){
            $controller_name::$name();
        } else if($_SERVER["REQUEST_URI"] != $uri && $_SERVER["REQUEST_METHOD"] != "POST"){
            RouteHelper::methodWrong("POST");
        }
    }
    
    static public function methodWrong(string $method): void
    {
        http_response_code(400);
        echo json_encode(
            [
                "message" => "Method tidak benar, harus ".$method,
                "status" => 400
            ]
        );
    }
    
}