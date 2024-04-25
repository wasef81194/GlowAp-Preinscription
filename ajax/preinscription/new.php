<?php
require_once "../../env.php";
require_once "../../class/Database.php";
require_once "../../class/Preinscription.php";
$requiredChamps = ["nom", "prenom", "email", "type"];
$datas = $_POST;
$errors = [];
foreach ($datas as $name => $value) {
   if (empty($value) && in_array($name, $requiredChamps)) {
     $errors[] = "Merci de remplir le champ $name";
    }
}
if (!empty($errors)) {
    $reponse = ['code' => 400, 'message' => "<li>".implode("</li><li>",$errors)."</li>"];
    echo json_encode($reponse);
    exit();
}
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$telephone = $_POST["email"];
$roles = ["client", "prefessionnel"];
$type = $_POST["type"];

if (!in_array($type, $roles)) {
    $reponse = ['code' => 400, 'message' => "Type non reconnue"];
    echo json_encode($reponse);
    exit();
}

$types = [$type];
$preinscritpion = new Preinscription($nom,$prenom,$email,$telephone,$types);
$insert = $preinscritpion->flush();

if ($insert) {
    $reponse = ['code' => 200, 'message' => "Inscription réussie"];
}
else{
    $reponse = ['code' => 400, 'message' => "Une erreur est survenue, veuillez réessayer"];
}
echo json_encode($reponse);
exit();