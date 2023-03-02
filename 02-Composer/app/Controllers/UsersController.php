<?php

/**
 * Criar uma classe normal:
 * - Sempre precisa de um namespace;
 */

namespace App\Controllers;

use SON\Controller;

// class UsersController
// {
//     public function handler()
//     {
//         return self::class;
//     }
// }

class UsersController extends Controller
{
    public function index()
    {
        return "E aqui é a public function index() da classe UsersController\n
         e para retornar sua class é usado:\n get_class(this): " . get_class($this);
    }
};
