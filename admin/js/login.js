function connect(formData) {
    return fetch('./controllers/userLogin.php', {
        method: "post",
        body: formData
    })
    .then(response => response.json());
}

function error(response) {
    alert(response.message.join("\n"))
}

function success(response) {

}

(function () {
    let formLogin = document.querySelector("#form-login");

    formLogin.addEventListener("submit", async function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        await connect(formData).then((response)=> {
            if(!response.status) {
                error(response);
                return;
            }
            success(response);
        });
    });
})();