$(document).ready(function () {
    if (!Modernizr.input.autofocus) {
        $("input[autofocus]").focus();
    }
});