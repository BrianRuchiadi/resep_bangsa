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