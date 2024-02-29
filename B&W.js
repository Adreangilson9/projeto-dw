const container = document.getElementById('container');
const cadastroBtn = document.getElementById('cadastro');
const iniciarsessãoBtn = document.getElementById('iniciar sessão');

cadastroBtn.addEventListener('click', () => {
    container.classList.add("active");
});

iniciarsessãoBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
