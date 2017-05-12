(function () {
    'use strict';
    window.TEESIGN = {
        constants: {}
    };

    TEESIGN.app = {
        init: function () {
            /**
             * Set env for Angular
             */
            localStorage.setItem('env', $("body").data("env"));
        }
    };

    TEESIGN.func = {
        notificationToggle : function(){
            $('.notification-panel').toggleClass('hidden');
        }
    }

})();