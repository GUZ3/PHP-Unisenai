function validacao(){
    
    let camponome= document.getElementById("nome");
    let nome= document.getElementById("nome").value.trim();

    let campoemail= document.getElementById("email");
    let email= document.getElementById("email").value.trim();

    if(nome===""){
     
        alert("Preencha o campo de nome!");
        camponome.focus();
        return false;

    } else if(email===""){

        alert("Preencha o campo de Email!");
        campoemail.focus();
        return false;
    }

    return true;
}