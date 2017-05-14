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