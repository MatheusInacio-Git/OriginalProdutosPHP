<?php
require 'components/Banner.php';
require 'components/Carousel.php';
require 'components/ProductGrid.php';
require 'components/ResellerInvite.php';
require 'components/ContactForm.php';
require 'components/Footer.php';

$banner = new Banner();
$carousel = new Carousel();
$productGrid = new ProductGrid();
$resellerInvite = new ResellerInvite();
$contactForm = new ContactForm();
$footer = new Footer();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Original Produtos - Palitos de Churrasco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <?php 
    $banner->render();
    $carousel->render();
    ?>
    
    <!-- Botão de WhatsApp -->
    <a href="https://wa.me/SEU_NUMERO" target="_blank" class="whatsapp-button"><img src="assets/img/zap.png" alt="WhatsApp"></a>
    
    <?php 
    $productGrid->render();
    $resellerInvite->render();
    $contactForm->render();
    $footer->render();
    ?>
    
    <script src="scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>
