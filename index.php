<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style-index.css">
    <script src="script/main.js" defer></script>
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


    <div class="dropdown-wrapper">
        <div class="dropdown-btn" id="selected-item">Sélection du rôle
            <span><i class="fa-solid fa-caret-down"></i></span>
        </div>

        <div class="dropdown-menu">
            <div class="item" onclick="selectRole('admin')">Admin</div>
            <div class="item" onclick="selectRole('patient')">Patient</div>
            <div class="item" onclick="selectRole('medecin')">Médecin</div>
        </div>
    </div>

    <script>
    function selectRole(role) {
        document.getElementById('selected-item').innerText = role;
        // Ajoute un champ caché pour soumettre la valeur du rôle sélectionné
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "role");
        hiddenField.setAttribute("value", role);

        // Ajoute le champ caché au formulaire
        document.querySelector('form').appendChild(hiddenField);

        // Soumet automatiquement le formulaire
        document.querySelector('form').submit();
    }
    </script>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- Le formulaire est maintenant caché et soumis via JavaScript -->
    </form>

    
<!--<form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p><label for="role">Sélectionnez votre rôle :</label>
        <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="patient">Patient</option>
            <option value="medecin">Médecin</option>
        </select></p>
        <button type="submit">Continuer</button>
</form>-->


</body>
</html>
