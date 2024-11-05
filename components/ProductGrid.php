<?php
class ProductGrid {
    public function render() {
        echo '
        <section id="produtos" class="container mt-5">
        <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="./assets/img/Esp2550.png" class="img-fluid" alt="Hashi">
                    <h3>Hashi</h3>
                    <p>Para experiências gastronômicas autênticas.</p>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="./assets/img/Cx1050k.png" class="img-fluid" alt="Palito Dental">
                    <h3>Palito Dental com Menta</h3>
                    <p>Refrescância a cada uso.</p>
                </div>
        </div>
        </section>';
    }
}
?>
