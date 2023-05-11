<?php
class Hero
{
    //acces modifier pada OOP PHP ada 3:
    // 1. public : atttribut atau method dapat di akses oleh siapapun
    // 2. private : attribut atau method hanya daoat diakses oleh class saat ini saja
    // 3. protected : mirip seperti private, bedanya dia dapat diakses pula oleh anak classnya

    //attribute / property
    public $nama;
    public $health;
    public $damage;
    public $level = 1;
    public $exp = 0;

    // method yang dijalankan otomatis pada pertama kali object dibuat
    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }

    //method
    public function getInfo()
    {
        echo "<hr>Nama: " . $this->nama;
        echo "<br>HP: " . $this->health;
        echo "<br>Damage: " . $this->damage;
        echo "<br>EXP: " . $this->exp;
        echo "<br>Level: " . $this->level;
    }

    public function levelUp()
    {
        $this->level++;
        $this->health = $this->health + 150;
        $this->damage = $this->damage + 45;

        $this->exp = $this->exp - 100;
    }

    public function farming()
    {
        $this->exp += 55;
        echo "<br> ----- $this->nama Telah Melakukan Farming -----";

        if ($this->exp >= 100) {
            $this->levelUp();
        }
    }

    public function attack($target)
    {
        $target->health = $target->health - $this->damage;
        echo "<br> ----- $this->nama Telah Melakukan Attack -----";
    }
}

// membuat object / instansiasi
$hero1 = new Hero('Alucard', 3200, 250);
$hero2 = new Hero('Franco', 5000, 50);

// //set atribut dari objek
// $hero1->nama = "Alucard";
// $hero1->health = 3200;
// $hero1->damage = 250;

// $hero2->nama = "Franco";
// $hero2->health = 5000;
// $hero2->damage = 50;

// // panggil atribut pada objek
// echo $hero1->nama;

// panggil method pada objek
$hero1->getInfo();
$hero2->getInfo();

$hero2->farming();

$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();
$hero1->farming();

$hero1->attack($hero2);

echo "<br>";
$hero1->getInfo();
$hero2->getInfo();
