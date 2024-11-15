<?php
require_once 'config.php';
require_once 'functions.php';

$commandes = getCommandes($conn);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commandes - ElectroMarket</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="commandes">
      <h1>Nos commandes</h1>
      <table>
        <thead>
          <tr>
            <th>Numéro</th>
            <th>Client</th>
            <th>Date</th>
            <th>Total</th>
            <th>Statut</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
                    foreach ($commandes as $commande) {
                        echo "<tr>";
                        echo "<td>" . $commande['id'] . "</td>";
                        echo "<td>" . getClientName($conn, $commande['client_id']) . "</td>";
                        echo "<td>" . $commande['date'] . "</td>";
                        echo "<td>" . $commande['total'] . " €</td>";
                        echo "<td>" . $commande['statut'] . "</td>";
                        echo "<td>";
                        echo "<a href='update_commande.php?id=" . $commande['id'] . "' class='btn'>Modifier</a>";
                        echo "<a href='delete.php?type=commande&id=" . $commande['id'] . "' class='btn btn-danger'>Supprimer</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
        </tbody>
      </table>
      <a href="add_commande.php" class="btn">Ajouter une commande</a>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>

</html>