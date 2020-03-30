<?php

class Properties 
{

    public $stamina;
    public $strenght;
    public $wisdom;
    public $inteligence;
    public $charisma;
    public $dexerity;
    public $sex;
    public $name;
    public $surname;

    public function __construct($stamina, $strenght, $wisdom, $inteligence, $charisma, $dexerity, $sex, $race)
    {

        $this->stamina = $stamina;
        $this->strenght = $strenght;
        $this->wisdom = $wisdom;
        $this->inteligence = $inteligence;
        $this->charisma = $charisma;
        $this->dexerity = $dexerity;
        $this->sex = $sex;
        $this->race = $race;

        $this->name = $this->name();
        $this->surname = $this->surname();

    }

    public function name ()
    {

        $male_names = array("Adrik", "Alberich", "Baer", "Barendd", "Brottor", "Dain", "Darrak", "Eberk", "Einkil", "Fargrim", "Gardain", "Harbek", "Kildrak", "Morgran", "Orsik", "Oskar", "Rangrim", "Rurik", "Taklinn", "Toradin", "Torin", "Tordek", "Traubon", "Travok", "Ulfgar", "Veit", "Vondal");
        $female_names = array("Artina", "Audhilda", "Bardryna", "Dagnala", "Diesa", "Eldeta", "Falkunna", "Gunnloda", "Gurdisa", "Helja", "Hlina", "Katra", "Kristryda", "Ildea", "Liftrasa", "Mardreda", "Rtiswynna", "Sannla", "Torbera", "Torgga", "Vistra");

        if ($this->sex == "male") {
            $random_name = array_rand($male_names);
            return $male_names[$random_name];
        } else if ($this->sex = "female") {
            $random_name= array_rand($female_names);
            return $female_names[$random_name];
        }
    }

    public function surname ()
    {

        $surnames = array("Balderk", "Dankil", "Gorunn", "Holderhek", "Loderr", "Lutgehr", "Rumnaheim", "Strakeln", "Torunn", "Ungart");

        $random_surnames = array_rand($surnames);
        return $surnames[$random_surnames];

    }

}

Class Race extends Properties
{

    public $race;

}

$properties = new Properties(200, 150, 80, 200, 100, 130, "male", "Trpaslík");



?>