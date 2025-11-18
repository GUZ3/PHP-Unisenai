function valida() {
    
    let senha = document.getElementById("senha").value;
    let regexSenha = /^(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (senha.trim() === "") {
        alert("Preencha o campo de senha!");
        return false;
    }

    if (!regexSenha.test(senha)) {
        alert("A senha deve conter pelo menos 8 caracteres, uma letra maiúscula e um número.");
        return false;
    }

    return true;
}
