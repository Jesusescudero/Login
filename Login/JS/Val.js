var psswd, count = 0;

var form = document.getElementById("frmregistro").addEventListener("submit", function(evento){
    
    var psswrd = document.getElementById("psswd1").value;
    var psswd = document.getElementById("psswdcon").value;
    
    if (psswrd == psswd) {

    }
    else{
        alert("passwords no coinciden");
        evento.preventDefault();
    }
});