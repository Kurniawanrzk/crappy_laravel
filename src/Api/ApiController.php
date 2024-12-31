<?php
namespace App\Api;
use Helper\IOHelper;
class ApiController {
    static public function index(): void
    {
        $data = [
            "nama" => "Kurniawan Rizki Trinanta Sembiring",
            "nim" => 230535607266,
            "jurusan" => "Teknik Informatika"
        ];
        IOHelper::resJson($data, 200);
    }

    static public function sendData(): void
    {
        IOHelpoer::resJson(IOHelper::req(), 200);
    }
}
