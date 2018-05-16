$(document).ready(function () {
    var nom = "";
    var email = "";
    var password = "";
    var password1 = "";
    var nom_reg = /^[a-z ]+$/i;
    var email_reg = /^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/;
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

    // === Validation Email ===
    $("#email").focusout(function () {
        var email_store = $.trim($("#email").val());
        if (email_store.length == "") {
            $(".email-error").html("Le Champ Email est Requis SVP!!")
            $("#email").addClass("border-red");
            $("#email").removeClass("border-green");
            email = "";
        } else if (email_reg.test(email_store)) {
            $.ajax({
                type: 'POST',
                url: 'ajax/signup.php',
                dataType: 'JSON',
                beforeSend: function () {
                    $(".email-error").html('<i class="fas fa-spinner fa-pulse"></i>')
                },
                data: {
                    'check_email': email_store
                },
                success: function (feedback) {
                    setTimeout(function () {
                        if (feedback['error'] == 'email_success') {
                            $(".email-error").html("<div class='text-success'><i class='far fa-check-circle'></i>Disponible</div>")
                            $("#email").addClass("border-green");
                            $("#email").removeClass("border-red");
                            email = email_store;
                        } else if (feedback['error'] == 'email_fail') {
                            $(".email-error").html("<div><i class='fas fa-exclamation'></i>Désolé, un utilisateur avec cet Email Existe Déjà !!</div>")
                            $("#email").addClass("border-red");
                            $("#email").removeClass("border-green");
                            email = "";
                        }
                    }, 3000);
                }
            });
        } else {
            $(".email-error").html("Adresse Email Invalide, Vérifié !!")
            $("#email").addClass("border-red");
            $("#email").removeClass("border-green");
            email = "";
        }
    })
})