function validarFormulario() {
    /* A função trim() serve para remover possíveis espaços em branco no inicio ou no final do input do campo */

    let nome= document.getElementById("nome").value.trim();
    let email= document.getElementById("email").value.trim();
    let mensagem = document.getElementById("mensagem").value.trim();


    if(nome===""||email===""||mensagem===""){

        alert("Preencha todos os campos obrigatórios");
        return false;
    }

    return true;
}