<h1>Jeu video php</h1>

<style>
    body{
        background-color: d3d3d3;
    }
</style>

<?php

class Personnage{

    const MAX_VIE = 100;

    
    public $vie = 60;

    public $atk = 20;

    public $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAtk(){
        return $this->vie;
    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = self::MAX_VIE;
        }else{
            $this->vie += $vie;
        }
    }
            
    public function mort(){
        return $this->vie <= 0;
    }

    private function empecherNegatif(){
        if($this->vie < 0){
            $this->vie = 0;
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecherNegatif();
    }
}