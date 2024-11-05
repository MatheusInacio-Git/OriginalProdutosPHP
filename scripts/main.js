// Atualiza o ano automaticamente no rodapé
document.getElementById('currentYear').textContent = new Date().getFullYear();

// Adiciona a classe 'active' ao clicar nos links da navbar
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});

// Redireciona para a página inicial ao clicar na logo
document.getElementById('logoHome').addEventListener('click', function() {
    window.location.href = '/';
});