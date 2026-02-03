const btnMenu = document.querySelector(".btn-menu");
const menu = document.querySelector(".menu");

btnMenu.addEventListener("click", () => {
    menu.classList.toggle("active");
});

const perguntas = document.querySelectorAll(".pergunta-item");

perguntas.forEach(item => {
    const topPergunta = item.querySelector('.top-pergunta-item');
    
    topPergunta.addEventListener('click', () => {
        item.classList.toggle('ativo');
    });
});