<?php
class Carousel {
    public function render() {
        echo '
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="assets/img/Carrosel1.png" class="d-block w-100" alt="Imagem 2">
                    <div class="carousel-caption-custom">
                        <h1>Desde <span class="highlight">1985</span>, trazendo <span class="highlight">tradição</span> e <span class="highlight">qualidade</span> em cada palito.</h1>
                        <p>Na Original Produtos, nossa missão é oferecer soluções simples e eficientes para o seu churrasco.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Carrosel2.png" class="d-block w-100" alt="Imagem 3">
                    <div class="carousel-caption-custom">
                        <h1 class="white">Compromisso com a <span class="highlightbranco">excelência</span>: do campo à sua mesa.</h1>
                        <p class="white">Cada palito de churrasco passa por um rigoroso processo de <span class="highlightbranco">seleção</span> e <span class="highlightbranco">qualidade</span>.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Carrosel3.png" class="d-block w-100" alt="Imagem 1">
                <div class="carousel-caption-custom">
                    <h1 class="white"><span class="highlightbranco">Sustentabilidade</span> e <span class="highlightbranco">inovação</span> para o seu churrasco perfeito.</h1>
                    <p class="white">Oferecemos produtos que transformam seu churrasco em uma <span class="highlightbranco">experiência única</span>.</p>
                </div>
            </div>
        </div>
            
        <!-- Botões de controle -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>';
    }
}
?>
