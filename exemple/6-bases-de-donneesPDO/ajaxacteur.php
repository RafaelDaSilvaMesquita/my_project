
<?php
  include("1-connexion.php");
	echo "<select name='acteur'>";
	if(isset($_POST["idfilm"])){
		$sql = "SELECT id,pseudo FROM ajax
			WHERE film_id=".(int)$_POST["idfilm"]." ORDER BY pseudo";
       $resultats = $bdd->query($sql);;
	   while($row = $resultats->fetch(PDO::FETCH_OBJ)){
        echo "<option value='".$row->id."'>".$row->pseudo."</option>";
      }

	}
	echo "</select>";
?>
