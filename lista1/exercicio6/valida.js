function contador() {
    var texto = document.getElementById("texto").value.trim();
    
    var resultadoDiv = document.getElementById("resultado-js");

    if (texto === "") {
        resultadoDiv.innerHTML = "";
        return;
    }

    var RegexTexto = /\b[\wÀ-ÿ-]+\b/g;
    var palavras = texto.match(RegexTexto);
    var numPalavras = palavras ? palavras.length : 0;

    resultadoDiv.innerHTML =
        "Número de palavras: <span>" + numPalavras + "</span>";
}

function validarFormulario() {

    var texto = document.getElementById("texto").value.trim();
    var campoTexto = document.getElementById("texto");
    
    if (texto === "") {

        alert("Por favor, digite algum texto para análise.");    
        campoTexto.focus(); 
        return false; 
    }

    return true; 
}