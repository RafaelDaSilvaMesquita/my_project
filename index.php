<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <!-- Ajoute éventuellement des liens vers des fichiers de style (CSS) ici -->
</head>
<body>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifie si un formulaire a été soumis
        $role = isset($_POST['role']) ? $_POST['role'] : '';

        // Redirige en fonction du rôle sélectionné
        if ($role === 'admin') {
            header('Location: index-a.php');
            exit;
        } elseif ($role === 'patient') {
            header('Location: index-p.php');
            exit;
        } elseif ($role === 'medecin') {
            header('Location: index-m.php');
            exit;
        }
    }
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p><label for="role">Sélectionnez votre rôle :</label>
    <select name="role" id="role" required>
        <option value="admin">Admin</option>
        <option value="patient">Patient</option>
        <option value="medecin">Médecin</option>
    </select></p>
    <button type="submit">Continuer</button>
</form>


</body>
</html>
