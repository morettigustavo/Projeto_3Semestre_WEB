// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openModal(ind) {
    str = "id0" + ind;
    modal = document.getElementById(str);
    document.getElementById(str).style.display = 'block';
}

function closeModal(ind) {
    str = "id0" + ind;
    modal = document.getElementById(str);
    document.getElementById(str).style.display = 'none';
}

function verificar() {
    var sNome_reg = nome_reg.value;
    var sEmail_reg = email_reg.value;
    var sSenha_reg = senha_reg.value;
    var sSenhaNovamente_reg = senha_novamente_reg.value;
    
    nome = document.getElementById('nome_reg');
    email = document.getElementById('email_reg');
    senha = document.getElementById('senha_reg');
    senha_novamente = document.getElementById('senha_novamente_reg');
    
    if (sNome_reg != "" && sNome_reg != "" && sSenha_reg != "" && sSenhaNovamente_reg != "") {
        if (sSenha_reg == sSenhaNovamente_reg) {
            document.form1.submit();
        } else {
            alert("As senhas não são iguais");
        }
    } else {
        alert("Preencha todos os campos");
    }
}

function verificar2() {
    var sEmail_log = email_log.value;
    var sSenha_log = senha_log.value;
    if (sEmail_log != "" && sSenha_log != "") {
        document.form2.submit();
    } else {
        alert("Preencha todos os campos");
    }
}

function sair() {
    window.location.href = "../banco/sair.php";
}