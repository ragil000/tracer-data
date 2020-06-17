var PageInit = function() {

    var _sidebarMenuSetting = function() {
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
        $('#child-mahasiswa-1').addClass('active')
        // remove show
        $('.nav-item > collapse').removeClass('show')
        // set show
        $('#mahasiswa').addClass('show')
    }

    // Return objects assigned to module
    return {
        init: function() {
            _sidebarMenuSetting()
        }
    }

}()

// Initialize module
document.addEventListener('DOMContentLoaded', function() {
    PageInit.init();
})

function getDatepicker(element) {
    var myDataPicker = $(element).datepicker({ 
        language : 'in', 
        dateFormat: 'yyyy-mm-dd', 
        // autoClose : true
    }).data('datepicker')
    myDataPicker.selectDate(new Date($(element).val()))
}