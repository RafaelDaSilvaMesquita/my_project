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

    <style>
        /* Ajout de la classe pour le menu déroulant */
        .dropdown-wrapper {
            width: 200px; /* Ajuste cette valeur selon tes besoins */
            margin: 0 auto; /* Centrer le menu déroulant */
        }

        .dropdown-btn {
            width: 100%;
            text-align: left; /* Assurer que le texte est aligné à gauche */
            padding: 10px; /* Ajouter du padding pour améliorer l'apparence */
            border: 1px solid #ccc; /* Ajouter une bordure */
            border-radius: 4px; /* Ajouter des coins arrondis */
            background-color: #fff; /* Couleur de fond */
            cursor: pointer; /* Curseur de la souris */
        }
    </style>

</head>
<body class="text-center">

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

<main class="form-signin">
    <header>
        <div>
            <h1 class="h3 mb-3 fw-normal">Bienvenue à l'hôpital des Lumières</h1>
        </div>
        <nav>

      </nav>
      <br />
    </header>
    <article>
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
</article>
</main>

    
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
