$(document).ready(function () {
    var nom = "";
    var email = "";
    var password = "";
    var password1 = "";
    var nom_reg = /^[a-z ]+$/i;
    // === Validation du Nom ===
    $("#nom").focusout(function () {
        var store = $.trim($("#nom").val());
        if (store.length == "") {
            $(".nom-error").html("Le Champ Nom est Requis SVP!!")
            $("#nom").addClass("border-red");
            $("#nom").removeClass("border-green");
            nom = "";
        } else if (nom_reg.test(store)) {
            $(".nom-error").html("")
            $("#nom").addClass("border-green");
            $("#nom").removeClass("border-red");
            nom = store;
        } else {
            $(".nom-error").html("Le Nom ne doit pas contenir de chiffre!!")
            $("#nom").addClass("border-red");
            $("#nom").removeClass("border-green");
            nom = "";
        }
    }) // === Validation du Nom ===
})