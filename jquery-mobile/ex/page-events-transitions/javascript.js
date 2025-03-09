$(document).bind("pagebeforehide", "#firstpage", function (evt, data) {
    alert("página antes de ocultarse");
})
$(document).bind("pagebeforeshow", "#firstpage", function (evt, data) {
    alert("página antes de mostrarse");
})
$(document).bind("pagehide", "#firstpage", function (evt, data) {
    alert("pagina que se oculta");
})
$(document).bind("pageshow", "#firstpage", function (evt, data) {
    alert("página que se muestra");
})