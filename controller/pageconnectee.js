DECO = {

    btn : "",
    btn1 : "",

    init : function() {
        DECO.btn = document.querySelector("#deco");
        DECO.btn1 = document.querySelector("#suppr");
        DECO.btn.addEventListener("click", DECO.deco);
        DECO.btn1.addEventListener("click", DECO.suppr);
    },

    deco : function() {
        window.location = "../index.php";
    },

    suppr : function() {
        alert("ceci est un test, je ne supprime rien");
    }
};

window.onload = DECO.init;