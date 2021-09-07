<?php

namespace controllers;
use models\Lanzamiento;

require_once '../autoload.php';

class Player extends Lanzamiento{
    
    private $throw1;

    public function setPlayer2(string $nombre)
    {
        $this->player = $nombre;                
    }

    public function getPlayer2():string
    {
        return $this->player;
    }    

    //Verificar que los inputs tengan los nombres de los jugadores
    public function mensaje()
    {
        if(isset($_POST['lanzar'])){
            if(empty($_POST['jugador1']) and empty($_POST['jugador2'])){
                $mensaje = "debe ingresar los nombres de los jugadores";
            }else{
                $this->setPlayer1($_POST['jugador1']);
                if(empty($_POST['jugador2'])){
                    $mensaje = "{$this->getPlayer1()} debes tener un contrincante";
                }else{
                    $this->setPlayer2($_POST['jugador2']);
                    if(empty($_POST['jugador1'])){
                        $mensaje = "{$this->getPlayer2()} debes tener un contrincante";
                    }else{   
                        $this->throw = rand(1,6);
                        $this->throw1 = rand(1,6);                
                        $mensaje = "{$this->getPlayer1()} el numero que lanzaste fue {$this->throw}\n<br>
                        {$this->getPlayer2()} el numero que lanzaste fue {$this->throw1}\n<br/>";
                        
                    }
                }
            }
            return $mensaje;
        }
    }//end method mensaje()

    //Identificar que jugador es el ganador
    function getWinner()
    {
        if(!empty($_POST['jugador1']) && !empty($_POST['jugador2'])){
            if($this->throw > $this->throw1){
                $mensaje = "El ganador es: {$this->getPlayer1()}";               
            }elseif($this->throw == $this->throw1){
                $mensaje = "Han quedado empatados";              
            }else{
                $mensaje = "El ganador es: {$this->getPlayer2()}";           
            }
            return $mensaje;
        }         
    }
}


                           