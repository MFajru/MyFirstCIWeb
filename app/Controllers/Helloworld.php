<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($nama, $npm)
    {
        echo "Hello" . "<br>";
        //echo $this->nama;
        echo $nama . "<br>";
        echo $npm;
    }

    public function show()
    {
        echo "Muhammad Fajru Ramadhan" . "<br>";
        echo "1857051003";
    }
}
