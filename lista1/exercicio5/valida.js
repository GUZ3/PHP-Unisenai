function valida() {
    let campoEmail = document.getElementById("email");
    let email = campoEmail.value.trim();

    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        alert("O campo de E-mail não pode estar vazio!");
        campoEmail.focus();
        return false;
    } 
    
    if (!regexEmail.test(email)) {
        alert("Formato de E-mail inválido! Por favor, use o formato 'exemplo@email.com'.");
        campoEmail.focus();
        return false;
    }
    
    return true;
}