<?php
require_once 'config.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ElectroMarket</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="hero">
      <h1>Bienvenue sur ElectroMarket</h1>
      <p>Découvrez notre large gamme de produits électroniques</p>
      <a href="#" class="btn">Voir les produits</a>
    </section>

    <section class="featured-products">
      <h2>Nos produits phares</h2>
      <div class="product-grid">
        <?php
                $featured_products = getFeaturedProducts($conn);
                foreach ($featured_products as $product) {
                    echo "<div class='product-card'>";
                    echo "<img src='" . $product['image'] . "' alt='" . $product['nom'] . "'>";
                    echo "<h3>" . $product['nom'] . "</h3>";
                    echo "<p>" . $product['description'] . "</p>";
                    echo "<p>Prix: " . $product['prix'] . " €</p>";
                    echo "<a href='product.php?id=" . $product['id'] . "' class='btn'>Voir le produit</a>";
                    echo "</div>";
                }
                ?>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>
</body>

</html>