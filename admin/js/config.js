// configurar perfil:
const prev = document.getElementById("prev")
const fotoInput = document.getElementById("foto-input");

fotoInput.addEventListener("change", function () {
    const arquivo = fotoInput.files[0];


    if (arquivo) {
        const leitor = new FileReader();

        leitor.onload = function (event) {
            prev.src = event.target.result;
            prev.style.display = "block";
        };

        leitor.readAsDataURL(arquivo);
    }
});