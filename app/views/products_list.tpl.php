<div class="row">
    <!-- Parcours des produits dans le tableau $viewData['products'] -->
    <?php foreach ($viewData['products'] as $product) : ?>
        <div class="product col-xl-3 col-lg-4 col-sm-6">
            <div class="product-image">
                <!-- Lien vers la page produit avec image dynamique -->
                <a href="product.html" class="product-hover-overlay-link">
                    <!-- Affichage de l'image du produit en utilisant son chemin -->
                    <img src="<?= $baseRoute . '/' . $product->getPicture() ?>" alt="product" class="img-fluid">
                </a>
            </div>
            <div class="product-action-buttons">
                <!-- Bouton pour ajouter au panier (fonctionnalité à implémenter) -->
                <a href="#" class="btn btn-outline-dark btn-product-left">
                    <i class="fa fa-shopping-cart"></i>
                </a>
                <!-- Lien vers la page détaillée du produit -->
                <a href="product.html" class="btn btn-dark btn-buy">
                    <i class="fa-search fa"></i>
                    <span class="btn-buy-label ml-2">Voir</span>
                </a>
            </div>
            <div class="py-2">
                <p class="text-muted text-sm mb-1">
                    <!-- Placeholder pour afficher une catégorie ou un type -->
                </p>
                <!-- Nom du produit -->
                <h3 class="h6 text-uppercase mb-1">
                    <a href="product.html" class="text-dark">
                        <?= $product->getName() ?>
                    </a>
                </h3>
                <!-- Prix du produit -->
                <span class="text-muted">
                    <?= $product->getPrice() ?>€
                </span>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Fin de la boucle des produits -->
</div>