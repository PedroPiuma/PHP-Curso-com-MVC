<?php

namespace SON; // namespace criado no composer.json

class Controller // Class deve ter o mesmo nome do arquivo.php
{
    // private static function getNow()
    // {
    //     return "isso funciona " . (new \DateTime())->format("d/m/Y H:i:s");
    // }

    public function handler()
    {
        // var_dump($this::getNow("teste"));
        var_dump(self::class);
        return self::class; // (Self) se referência a própria classe e (class) retorna o nome completo dessa classe
    }
}
