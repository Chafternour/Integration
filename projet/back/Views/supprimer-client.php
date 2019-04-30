<?PHP
include "../Core/clientC.php";
$clientC=new clientC();
if (isset($_POST["cinS"])){
	$clientC->supprimerClient($_POST["cinS"]);
	header('Location: list-clients.php');
}

?>