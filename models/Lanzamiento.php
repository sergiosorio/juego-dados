<?php
namespace models;

class Lanzamiento{       
    private $player;
    private $throw;

    public function setPlayer1(string $nombre)
    {
         $this->player = $nombre;
    }

    public function getPlayer1():string
    {
        return $this->player;
    }
}
