function valida() {

    var campoNum1= document.getElementById("num1");
    var num1= campoNum1.value.trim();

    var campoNum2= document.getElementById("num2");
    var num2= campoNum2.value.trim();

    if(!isFinite(num1) && num1===""){
        alert("Insira um número no campo 1");
        campoNum1.focus();
        return false;

    } else if(!isFinite(num2) && num2===""){
        alert("Insira um número no campo 2");
        campoNum2.focus();
        return false;

    } else if(num1 > num2){
        alert("O número de início tem que ser menor do que o de fim!");
        campoNum2.focus();
        return false;

    } 

    return true;
}