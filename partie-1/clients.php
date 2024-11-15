<?php
require_once 'config.php';
require_once 'functions.php';

$clients = getClients($conn);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clients - ElectroMarket</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="clients">
      <h1>Nos clients</h1>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    foreach ($clients as $client) {
                        echo "<tr>";
                        echo "<td>" . $client['nom'] . "</td>";
                        echo "<td>" . $client['email'] . "</td>";
                        echo "<td>" . $client['telephone'] . "</td>";
                        echo "<td>";
                        echo "<a href='update_client.php?id=" . $client['id'] . "' class='btn'>Modifier</a>";
                        echo "<a href='delete.php?type=client&id=" . $client['id'] . "' class='btn btn-danger'>Supprimer</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
        </tbody>
      </table>
      <a href="add_client.php" class="btn">Ajouter un client</a>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>

</html>