"use strict";

$(document).ready(function() {
    $('.required label').each(function() {
        $(this).append('<span class="text-danger"> *</span>');
    });
});
