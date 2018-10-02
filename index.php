<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vue/css/style.css">
    <script src="controller/ajax.js"></script>
    <title>Page Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <div id="formul">
        <label>Nom : </label>
        <input type="text" data-zone="connec" name="0" required>
        <label>Prénom : </label>
        <input type="text" data-zone="connec" name="1" required>
        <label>E-mail : </label>
        <input type="email" data-zone="connec" name="2" required>
        <label>Mot de passe : </label>
        <input type="password" data-zone="connec" name="3" autocomplete="off" minlength="8" maxlength="12" required>
        <label>Retapez votre mot de passe : </label>
        <input type="password" autocomplete="off" minlength="8" maxlength="12" required>
    </div>
    <div id="bouton">
        <button data-zone="connec">Connexion</button>
        <button id="forgot">Mot de passe oublié?</button>
    </div>
</body>
</html>