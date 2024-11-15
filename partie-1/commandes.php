<?php
require_once 'database.php';

// Récupération des commandes
$sql = "SELECT Commandes.*, Clients.Nom AS NomClient 
        FROM Commandes 
        JOIN Clients ON Commandes.Client_ID = Clients.ID";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Commandes - ElectroMarket</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <header>
    <h1>Commandes - ElectroMarket</h1>
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
          <th>Date</th>
          <th>Client</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["Date"] . "</td>";
                        echo "<td>" . $row["NomClient"] . "</td>";
                        echo "<td>
                                <a href='update_commande.php?id=" . $row["ID"] . "'>Modifier</a>
                                <a href='delete.php?id=" . $row["ID"] . "&type=commande'>Supprimer</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Aucune commande trouvée.</td></tr>";
                }
                ?>
      </tbody>
    </table>
    <a href="add_commande.php" class="btn">Ajouter une commande</a>
  </main>

  <footer>
    <p>&copy; 2023 ElectroMarket. Tous droits réservés.</p>
  </footer>
</body>

</html>