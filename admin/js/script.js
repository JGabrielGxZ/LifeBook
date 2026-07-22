const perfil = document.getElementById("perfil");
const perfilMenu = document.getElementById("perfil-menu");

perfil.addEventListener("click", function () {
    perfilMenu.classList.toggle("aberto");
})

document.addEventListener("click", function (event) {
    const clickPerfil = perfil.contains(event.target);

    if (!clickPerfil) {
        perfilMenu.classList.remove("aberto");
    }
})


