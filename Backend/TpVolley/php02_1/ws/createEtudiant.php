<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    include_once("../racine.php"); 
    include_once RACINE.'/service/EtudiantService.php'; 
    create(); 
} 
function create(){ 
    extract($_POST); 
    $es = new EtudiantService(); 
    //insertion d’un étudiant 
    $es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe, $dateNaissance, $photo)); 
 
    //chargement de la liste des étudiants sous format json 
    header('Content-type: application/json'); 
    echo json_encode($es->findAllApi());
} 
?>