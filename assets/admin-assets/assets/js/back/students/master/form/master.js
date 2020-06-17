// minimize sidebar
$('.wrapper').addClass('sidebar_minimize')

// remove active parent menu
$('.nav-item').removeClass('active')
// set active parent menu
$('#parent-mahasiswa').addClass('active')
// remove active child
$('.child-nav-item').removeClass('active')
// set active child
$('#child-mahasiswa-1').addClass('active')

$('#datepicker').datepicker({
    language: 'in'
})