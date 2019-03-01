<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\DB;
use Slim\Http\Request;
use Slim\Http\Response;

class WelcomeController extends Controller
{
    public function index(Request $request,  Response $response)
    {
        $db = $this->ci->get('db');
        $user = $db->table("user")->first();
        var_dump($user);
        $logger = $this->ci->get('logger');
        $logger->info('a logger info');
        $response->getBody()->write("Hello, world");
        return $response;
    }
}