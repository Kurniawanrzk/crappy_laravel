<?php
namespace helper;

class IOHelper {
    static public function resJson(array|object $data, int $status): void
    {
        http_response_code($status);
        echo json_encode(
            $data
        );
    }

    static public function req(): array
    {
        return $_POST;
    }
}