<?php
require_once 'database.php';

// Récupération des paiements
$sql = "SELECT Paiements.*, Commandes.ID AS CommandeID, Clients.Nom AS NomClient
        FROM Paiements 
        JOIN Commandes ON Paiements.Commande_ID = Commandes.ID
        JOIN Clients ON Commandes.Client_ID = Clients.ID";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Paiements - ElectroMarket</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <header>
    <h1>Paiements - ElectroMarket</h1>
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
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Montant</th>
          <th>Date</th>
          <th>Commande</th>
          <th>Client</th>
        </tr>
      </thead>
      <tbody>
        <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["Montant"] . " €</td>";
                        echo "<td>" . $row["Date"] . "</td>";
                        echo "<td><a href='update_commande.php?id=" . $row["CommandeID"] . "'>Commande #" . $row["CommandeID"] . "</a></td>";
                        echo "<td>" . $row["NomClient"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Aucun paiement trouvé.</td></tr>";
                }
                ?>
      </tbody>
    </table>
    <a href="add_paiement.php" class="btn">Ajouter un paiement</a>
  </main>

  <footer>
    <p>&copy; 2023 ElectroMarket. Tous droits réservés.</p>
  </footer>
</body>

</html>