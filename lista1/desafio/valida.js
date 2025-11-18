function validaProduto() {
    let campoNome = document.getElementById("nome");
    let campoPreco = document.getElementById("preco");
    let nome = campoNome.value.trim();
    let preco = campoPreco.value.trim();
    let erroPreco = document.getElementById("erroPreco");

    const regexPreco = /^\d+([.,]\d{1,2})?$/; 

    erroPreco.textContent = ""; 

    if (nome === "") {
        alert("O nome do produto não pode estar vazio.");
        campoNome.focus();
        return false;
    }

    if (preco === "") {
        erroPreco.textContent = "O preço não pode estar vazio.";
        campoPreco.focus();
        return false;
    }

    if (!regexPreco.test(preco)) {
        erroPreco.textContent = "Formato de preço inválido. Use apenas números, ponto ou vírgula (Ex: 19.99).";
        campoPreco.focus();
        return false;
    }

    preco = preco.replace(',', '.');
    campoPreco.value = preco; 

    return true; 
}