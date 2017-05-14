(function () {
    'use strict';

    // Initialise JS
    $(document).ready(function () {
        //set environment for website use
        //TEESIGN.csrf = $("body").data("csrf");
        TEESIGN.constants.website_env = $("body").data("env");

        // Set general data from PHP
        if ($("#js-data").text() !== '') {
            TEESIGN.constants.data = $.parseJSON($("#js-data").text());
        } else {
            TEESIGN.constants.data = {};
        }

        TEESIGN.app.init();
    });

})();