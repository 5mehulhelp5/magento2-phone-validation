define([
    'jquery',
    'mage/translate',
    'jquery/validate'
], function ($) {
    'use strict';

    return function (validator) {
        validator.addRule(
            'phone_validation',
            function (value, element) {
                if (value === '') {
                    return true;
                }

                return /^[0-9]+$/.test(value);
            },
            function () {
                return $.mage.__('Please enter a valid phone number.');
            }
        );

        return validator;
    };
});
