(function () {

    'use strict';
    /**
     * App
     */
    angular
            .module('app', [
                'ngAnimate',
                'ngSanitize', // Needed for pascalprecht.translate
                'ui.router',
                'ngCookies', // Needed for pascalprecht.translate
                'ngRoute',
                'angularMoment'
/*              'pascalprecht.translate',
                'ng.deviceDetector',*/
            ]);
})();