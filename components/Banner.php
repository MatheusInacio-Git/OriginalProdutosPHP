<?php
class Banner {
    public function render() {
        echo '
        <div class="menu-background">
            <img src="./assets/img/logo.png" alt="Logo" class="logo" id="logoHome">
            <nav class="navbar navbar-expand-lg navbar-custom">
                <div class="container-fluid justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/catalogo.html">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faleConosco">Fale Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobreNos">Sobre Nós</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>';
    }
}
?>
