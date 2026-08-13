campoSenha = document.getElementById("senha");
icone = document.getElementById("mostrarSenha");

function mostrarSenha() {
    if (campoSenha.type == "password") {
        campoSenha.type = "text";
        icone.classList.remove("bi-eye")
        icone.classList.add("bi-eye-slash")
    } else {
        campoSenha.type = "password";
        icone.classList.remove("bi-eye-slash")
        icone.classList.add("bi-eye")
    }
}