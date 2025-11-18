function validaForm(){

    campoNome= document.getElementById("name");
    nome= document.getElementById("name").value.trim();

    if(nome===""){

        alert("Preencha o campo de nome!");
        campoNome.focus();
        return false;
    }

    return true;
}