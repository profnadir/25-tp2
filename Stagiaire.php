<?php 

class Stagiaire {

    private $nom;
    private $notes;

    public function __construct($nom, $notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNotes(){
        return $this->notes;
    }

    public function setNotes($notes){
        $this->notes = $notes;
    }

    public function calculerMoyenne(){
        return array_sum($this->notes)/count($this->notes);
    }

    public function trouverMax(){
        return max($this->notes);
    }

    public function trouverMin(){
        return min($this->notes);
    }

    public function __destruct()
    {
        //var_dump("end of life");
    }

}

$fadil = new Stagiaire("Fadil",[18,20,19]);


echo $fadil->getNom();
echo "<br/>";
print_r($fadil->getNotes());
echo "<br/>";
echo "La moyenne est :" . $fadil->calculerMoyenne();
echo "<br/>";
echo "Max est :" . $fadil->trouverMax();
echo "<br/>";
echo "Min est :" . $fadil->trouverMin();

/* $fadil->setNom("Fadil");
echo $fadil->getNom();

$fadil->setNotes([20,20,19]);
echo "<br/>";
print_r($fadil->getNotes()); */



/* class Montre{

    private $heure;
    private $minute;


    public function getheure(){
        return $this->heure;
    }

    public function getMinute(){
        return $this->minute;
    }

    public function setHeure($heure){
        $this->heure = $heure;
    }

    public function setMinute($minute){
        $this->minute = $minute;
    }

}

$cartier = new Montre();

/* $cartier->heure = 10;
$cartier->minute = 45; */

/* $cartier->setHeure(11);
$cartier->setMinute(45);

echo $cartier->getheure();
echo $cartier->getMinute();  */

//var_dump($cartier);


?>