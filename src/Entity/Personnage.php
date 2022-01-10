<?php
namespace App\Entity;

class Personnage{

    public $nom;
    public $age;
    public $sexe;
    public $carac =[];

    public static $personnages=[];

    public function __construct($nom, $age, $sexe, $carac){
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;
    }

    public static function creerPersonnages(){
        $p1 = new Personnage("Marc", 25, true, [
            "force" => 3,
            "agi" => 2,
            "intel" => 3
        ]);

        $p1 = new Personnage("Milo", 30, true, [
            "force" => 5,
            "agi" => 1,
            "intel" => 3
        ]);

        $p1 = new Personnage("Tya", 22, false, [
            "force" => 1,
            "agi" => 2,
            "intel" => 5
        ]);
    } 
    
public static function getPersonnageParNom($nom){
foreach(self::$personnages as $perso){
    if (strtolower($perso->nom) === $nom){
        return $perso;
    }
}
}

}