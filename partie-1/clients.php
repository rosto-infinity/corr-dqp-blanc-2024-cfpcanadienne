<?php
require_once 'database.php';

// Récupération des clients
$sql = "SELECT * FROM Clients";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Clients - ElectroMarket</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <header>
    <h1>Clients - ElectroMarket</h1>
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
          <th>Nom</th>
          <th>Adresse</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["Nom"] . "</td>";
                        echo "<td>" . $row["Adresse"] . "</td>";
                        echo "<td>
                                <a href='update_client.php?id=" . $row["ID"] . "'>Modifier</a>
                                <a href='delete.php?id=" . $row["ID"] . "&type=client'>Supprimer</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Aucun client trouvé.</td></tr>";
                }
                ?>
      </tbody>
    </table>
    <a href="add_client.php" class="btn">Ajouter un client</a>
  </main>

  <footer>
    <p>&copy; 2023 ElectroMarket. Tous droits réservés.</p>
  </footer>
</body>

</html>