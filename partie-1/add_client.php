<?php
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];

    $sql = "INSERT INTO Clients (Nom, Adresse) VALUES ('$nom', '$adresse')";
    if ($conn->query($sql) === TRUE) {
        header("Location: clients.php");
        exit;
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Ajouter un client - ElectroMarket</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <header>
    <h1>Ajouter un client - ElectroMarket</h1>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="clients.php">Clients</a></li>
        <li><a href="commandes.php">Commandes</a></li>
        <li><a href="paiements.php">Paiements</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>

      <label for="adresse">Adresse :</label>
      <textarea id="adresse" name="adresse" required></textarea>

      <input type="submit" value="Ajouter" class="btn">
    </form>
  </main>

  <footer>
    <p>&copy; 2023 ElectroMarket. Tous droits réservés.</p>
  </footer>
</body>

</html>