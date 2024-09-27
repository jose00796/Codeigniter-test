<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductosController extends BaseController
{
    public function mensaje()
    {
        //echo 'Mi primer Controlador en CodeIgniter 4';
        //return json_encode($test);

        return response()->setJSON(['mensaje' => 'Mi primer Controlador en CodeIgniter 4'], 200);
    }
}
