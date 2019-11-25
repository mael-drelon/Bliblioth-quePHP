<?php
class user{
 //propriété :
private $_nom;
private $_mdp = "1234";
//méthode :
public function AfficherNom(){

 echo "<p>Le nom est" .$this->_nom. " </p>";

}
public function SetNom($NouveauNom){

 $this->_nom = $NouveauNom;

}
public function SetMDP($NouveauMDP){

 $this->_mdp = $NouveauMDP;

}
public function verifMDP($LeNom,$LeMDP){

 if($LeNom == $this->_nom){

  if($LeMDP == $this->_mdp){

   return true;

  }

 }
 return false;
}
}
?>