// configurar perfil:

const preview = document.getElementById("preview");
const fotoInput = document.getElementById("foto-input");

fotoInput.addEventListener("change", function () {
    const arquivo = fotoInput.files[0];


    if (arquivo) {
        const leitor = new FileReader();

        leitor.onload = function (event) {
            preview.src = event.target.result;
            preview.style.display = "block";
        };

        leitor.readAsDataURL(arquivo);
    }
});