AJAX = {
    
    btn : "",
    btn1 : "",
    params : "",

    init : function() {
        AJAX.btn = document.querySelector("button[data-zone]");
        AJAX.btn1 = document.querySelector("#forgot");
        AJAX.btn.addEventListener("click", AJAX.connec);
        AJAX.btn1.addEventListener("click", AJAX.forgot);
    },

    connec : function(e) {
        attName = e.target.getAttribute("data-zone");
        champs = document.querySelectorAll("input[data-zone="+"\""+attName+"\"]");
        test = document.querySelectorAll("input");
        if (test[3].value == test[4].value) {
            champs.forEach(AJAX.ajout);
            AJAX.envoi(AJAX.params);
        } else {
            alert("vos mots de passe ne correspondent pas");
        }
    },

    forgot : function() {
        alert("Fallait pas oublier son mot de passe, c'est ballot!");
    },

    ajout : function (el) {

        AJAX.params+= (AJAX.params.length==0 ? "" : "&" )+el.name+"="+el.value;
    },

    envoi : function(smth) {

        var req = new XMLHttpRequest;
            req.onload = function() {
            var retour = req.responseText;
            window.location = retour;
            }
        req.open('POST', 'controller/control.php', true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.send(smth);

    
    }

};

window.onload = AJAX.init;