campoSenha = document.getElementById("senha");

function mostrarSenha() {
    if (campoSenha.type == "password") {
        campoSenha.type = "text";
    } else {
        campoSenha.type = "password";
    }
}