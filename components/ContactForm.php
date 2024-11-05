<?php
class ContactForm {
    public function render() {
        echo '
        <section id="contato" class="container mt-5 mb-5">
            <h2>Fale Conosco</h2>
            <form id="contact-form">
                <div class="mb-3"><label for="name" class="form-label">Nome</label><input type="text" class="form-control" id="name" required></div>
                <div class="mb-3"><label for="message" class="form-label">Mensagem</label><textarea class="form-control" id="message" rows="3" required></textarea></div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>';
    }
}
?>
