function valida() {
    
    let senha = document.getElementById("senha").value.trim();
    let campoSenha = document.getElementById("senha");
    let regexSenha = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (senha === "") {
        alert("Preencha o campo de senha!");
        campoSenha.focus();
        return false;
    }

    if (!regexSenha.test(senha)) {
        alert("A senha deve conter pelo menos 8 caracteres, uma letra maiúscula e um número.");
        campoSenha.focus();
        return false;
    }

    return true;
}