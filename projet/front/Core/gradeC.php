<?PHP
include "../config.php";
class gradeC {
      function ajouterGrad($grade){
        
        $sql="insert into grade (grad) values (:grad)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $grad=$grade->getgrad();
       

        
        $req->bindValue(':grad',$grad);
        
        

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

      }
}
      ?>