<?php

namespace SON; // === 'src' -- namespace criado no composer.json 

class Controller // Class deve ter o mesmo nome do arquivo.php
{
    public function handler()
    {
        return self::class; // (Self) se referência a própria classe e (class) retorna o nome completo dessa classe
        // Operador :: é responsável por pegar e retornar o nome dessa Classe. 
        // Parece acessar a propriedade class similar ao operar ->
    }
}
