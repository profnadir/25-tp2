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

class Formation{

    private $intitule; // "PHP"
    private $nbJours; // 5
    private $stagiaires; // []

    public function __construct($intitule,$nbJours,$stagiaires)
    {
        $this->intitule = $intitule;
        $this->nbJours = $nbJours;
        $this->stagiaires = $stagiaires;
    }

    public function getIntitule() {
        return $this->intitule;
    }

    public function setIntitule($intitule){
        $this->intitule = $intitule;
    }

    public function getNbJours() {
        return $this->nbJours;
    }

    public function setNbJours($nbJours){
        $this->nbJours = $nbJours;
    }

    public function getStagiaires() {
        return $this->stagiaires;
    }

    public function setStagiaires($stagiaires){
        $this->stagiaires = $stagiaires;
    }

    public function calculerMoyenneFormation(){
        $somme = 0;
        for ($i=0; $i < count($this->stagiaires); $i++) { 
            $somme += $this->stagiaires[$i]->calculerMoyenne();
        }
        return $somme/count($this->stagiaires);
    }

    public function getIndexMax(){
        $index = 0;
        $max = $this->stagiaires[0]->calculerMoyenne();

        for ($i=1; $i < count($this->stagiaires); $i++) { 
            if($this->stagiaires[$i]->calculerMoyenne() > $max){
                $index = $i;
                $max = $this->stagiaires[$i]->calculerMoyenne();
            }
        }

        return $index;
    }

    public function afficherNomMax(){

        $this->stagiaires[$this->getIndexMax()]->getNom();

    }

}

$s1 = new Stagiaire("John", [12,13,14]); // 13 //0
echo "<br/>";
echo "La moyenne du stagiaire 1 est : " . $s1->calculerMoyenne();
echo "<br/>";
$s2 = new Stagiaire("Jane", [15,16,14]); // 15 //1
echo "<br/>";
echo "La moyenne du stagiaire 2 est : " . $s2->calculerMoyenne();
echo "<br/>";
$s3 = new Stagiaire("James", [17,13,18]); // 16 //2
echo "<br/>";
echo "La moyenne du stagiaire 3 est : " . $s3->calculerMoyenne();
echo "<br/>";



$php = new Formation("PHP",5,[$s1,$s2,$s3]);
echo "<br/>";
echo "<br/>";

echo "La moyenne de la formation est : " . $php->calculerMoyenneFormation(); // 14.66666 

echo "<br/>";

echo "L'indice de la meuilleure moyenne de la formation est : " . $php->getIndexMax();

$fadil = new Stagiaire("Fadil",[18,20,19]);

echo "<br/>";
echo "<br/>";

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