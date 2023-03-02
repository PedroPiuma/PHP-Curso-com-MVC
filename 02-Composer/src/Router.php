<?php

namespace SON;

class Router implements \ArrayAccess
{
    /**
     * private - só a classe pode usar
     * protected - a classe e as que herdaram podem usar
     * public - acesso externo liberado
     * 
     *  A classe ArrayAccess informa para o motor do PHP que a classe Router
     * pode ser usada como Objeto, mas para isso acontecer precisa ser 
     * implementado 4 métodos:
     * 
     * offsetExists - Verifica se um item do array existe
     * offsetGet
     * offsetSet
     * offsetUnset
     * 
     */
    protected $routes = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function offsetExists($offset): bool  //$offset é a chave que está tentando ler
    {
        return isset($this->routes[$offset]); // isset retorna true ou false se uma variável existe
    }

    public function offsetGet($offset): mixed
    {
        return $this->routes[$offset];
    }

    public function offsetSet($offset,  $value): void
    {
        $this->routes[$offset] = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->routes[$offset]);
    }

    // public function handler()
    // {
    //     $path = $_SERVER['PATH_INFO'] ?? '/';
    //     if (strlen($path) > 1) {
    //         $path = rtrim($path, '/');
    //     }

    //     if ($this->offsetExists($path)) {
    //         return $this->offsetGet($path);
    //     }

    //     http_response_code(404);
    //     echo 'Página inexistente';
    // }
};
