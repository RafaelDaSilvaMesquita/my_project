
<?php
  include("1-connexion.php");
	echo "<select name='acteur'>";
	if(isset($_POST["idfilm"])){
		$sql = "SELECT id,pseudo FROM ajax
			WHERE film_id=".$_POST["idfilm"]." ORDER BY pseudo";
      $resultat = mysqli_query($bdd, $sql);
      while($row = mysqli_fetch_assoc($resultat)){
        echo "<option value='".$row["id"]."'>".$row["pseudo"]."</option>";
      }

	}
	echo "</select>";
?>
