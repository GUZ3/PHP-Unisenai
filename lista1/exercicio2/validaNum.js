function validaNum() {
    let campoNumero = document.getElementById("numero");
    let numero = campoNumero.value.trim();


    if (!isFinite(numero) || numero==="") {
        alert("O valor inserido não é um número válido.");
        campoNumero.focus();
        return false;
    }
    return true;
}
