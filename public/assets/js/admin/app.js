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
(function () {
    'use strict';

    /**
     * Config block
     */
    angular
            .module('app')
            .config(configure);

    configure.$inject = ['$httpProvider'];

    /**
     * App config for everything except routing
     */
    function configure($httpProvider) {
        
        configureTokenExpiryCheck();
        
        ////////////////

        /**
         * Token expiration check
         */
        function configureTokenExpiryCheck() {
            $httpProvider.interceptors.push(['$q', '$injector', '$window', 'APP_CONFIG',
                function ($q, $injector, $window, APP_CONFIG) {
                    return {
                        responseError: function (rejection) {
                            if (rejection.status === 401) {
                                //$window.location.href = APP_CONFIG.signinpage;
                            }

                            // If not a 401, do nothing with this error
                            return $q.reject(rejection);
                        }
                    };
                }
            ]);
        }

        $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        $httpProvider.defaults.headers.common["X-CSRF-TOKEN"] = $("body").data("csrf");
        
        //$httpProvider.defaults.xsrfHeaderName = 'X-CSRF-TOKEN';

        /**
         * Prevent IE11's unwanted caching of AJAX calls
         */

        // Initialize get if not there
        if (!$httpProvider.defaults.headers.get) {
            $httpProvider.defaults.headers.get = {};
        }         
        // Disable IE ajax request caching
        $httpProvider.defaults.headers.get['If-Modified-Since'] = 'Mon, 26 Jul 1997 05:00:00 GMT';
        $httpProvider.defaults.headers.get['Cache-Control'] = 'no-cache';
        $httpProvider.defaults.headers.get['Pragma'] = 'no-cache';

        

    }

})();
(function () {
    'use strict';

    /**
     * App constants
     */
    angular
            .module('app')
            .constant('APP_CONFIG', {
                cdnStatic: 'https://xxx.cloudfront.net',
                apiPath: '/api/admin',
                root: 'http://local.teesign.com/',
                admin: 'admin/',
            });
})();
(function () {
    'use strict';

    /**
     * BlankController
     */
    angular
            .module('app')
            .controller('BlankController', BlankController);

    BlankController.$inject = [
        '$timeout', '$scope', '$window',
        'APP_CONFIG'
    ];

    function BlankController($timeout, $scope, $window, APP_CONFIG) {
        var vm = this;
        vm.APP_CONFIG = APP_CONFIG;
        vm.notificationToggle = TEESIGN.func.notificationToggle();

        activate();

        function activate(){
            console.log("ok");
        }
    }

})();
(function () {
    'use strict';

    /**
     * blankService
     */
    angular
            .module('app')
            .factory('blankService', blankService);

    blankService.$inject = ['$http', 'APP_CONFIG', '$cookies'];

    function blankService($http, APP_CONFIG, $cookies) {
        var service = {
            fetch: fetch,
        };

        return service;

        function fetch() {
            return $http.get([APP_CONFIG.apiPath , '/blank'].join('')).then(function (result) {
                return result.data;
            });
        }      

      
    }
})();