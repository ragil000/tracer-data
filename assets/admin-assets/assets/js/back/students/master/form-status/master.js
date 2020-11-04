// minimize sidebar
$('.wrapper').addClass('sidebar_minimize')

// remove active parent menu
$('.nav-item').removeClass('active submenu')
// set active parent menu
$('#parent-mahasiswa').addClass('active submenu')
// remove aria-expanded
$('.nav-item > a').removeAttr('aria-expanded')
// set aria-expanded
$('#parent-mahasiswa > a').attr('aria-expanded', 'true')
// remove active child
$('.child-nav-item').removeClass('active')
// set active child
$('#child-mahasiswa-2').addClass('active')
// remove show
$('.nav-item > collapse').removeClass('show')
// set show
$('#mahasiswa').addClass('show')

$('#datepicker').datepicker({
    language: 'in'
})

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});