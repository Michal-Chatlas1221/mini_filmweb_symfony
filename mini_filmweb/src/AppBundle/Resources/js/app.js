(function() {

    'use strict';

    angular.module("one_and_only", ['ngMaterial', 'ngMessages'])
        .config(['$interpolateProvider', function ($interpolateProvider) {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        }]);
})();
