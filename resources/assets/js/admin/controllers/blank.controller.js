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