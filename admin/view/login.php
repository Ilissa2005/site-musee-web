<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="view/css/style11.css">
    <title>Login Admin</title>
</head>
<body>
    <h1>Connexion Administrateur</h1>

<form method="POST" action="control/accueilC.php">
    <label>Email :</label>
    <input type="email" name="email" required>

    <label>Mot de passe :</label>
    <input type="password" name="mdp" required>

    <button type="submit" name="login">Se connecter</button>
</form>
</body>
</html>
