<?PHP
include "../Entities/client.php";
include "../Core/clientC.php";

$client1= new client($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_n'],$_POST['adresse_m'],$_POST['adresse'],$_POST['numero'],$_POST['mot_d_p'],0,$_POST['grad_fk']);


$client1C=new clientC();
$client1C->ajouterClient($client1);

//MAAAAAAAAAIIIIIIIIIL



//$cc=new clientC();
//$listeClients=$cc->AfficherClient();
$subject ="Kalthita.tn : Bienvenue sur Kalthita !";
        $message="Bienvenue ".$_POST['nom']." ".$_POST['prenom']." Votre identifiant est  : ".$_POST['adresse_m']." et votre mot de passe est : ".$_POST['mot_d_p'];
        $headers ="From: amine.gtari@esprit.tn";
//foreach ($listeClients as $row) {
    # code...
    //$to =//$row['adresse_m'];
      $to="nour.chafter@esprit.tn";
        mail($to, $subject, $message,$headers);
//}}


header('Location: index.html');



?>