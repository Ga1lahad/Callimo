const form = document.getElementById("formulario");
const cpf = document.getElementById("cpf");
const pass = document.getElementById("pass");
cpf.setAttribute("placeholder", "___.___.___-__");
var i = 0;
var valor;

form.addEventListener("submit", (e) => {
    console.log(cpf.value);

    e.preventDefault();
});
cpf.addEventListener("keypress", (e) => {

    if (cpf.value.length == 3 || cpf.value.length == 7) {
        cpf.value = (cpf.value).concat(".");
    }
    if (cpf.value.length == 11) {

        cpf.value = (cpf.value).concat("-");
    }

});