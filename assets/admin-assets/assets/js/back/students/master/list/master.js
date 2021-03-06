// $('#datepicker').datepicker({
//     language: 'in'
// })
var page        = 0
var setData     = true
var dataFilter = {}

function filter(element) {
    setData = true
    let key = $(element).attr('id')
    let value = $(element).val()
    page = 0
    if(typeof dataFilter === 'object') {
        if(value) {
            if((key in dataFilter)) {
                delete dataFilter[key]
                dataFilter[key] = value
                
            }else {
                dataFilter[key] = value
            }
        }else {
            if((key in dataFilter)) {
                delete dataFilter[key]
            }
        }
    }else {
        if(value) {
            dataFilter[key] = value
        }
    }
    addListData()
}

// add list data
function addListData() {
    let url     = BASE_URL+'back/student/read/'+page
    let loader  =   '<div id="list-loader" class="col-12 p-0 m-0 text-center">'+
                    '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>'+
                    '</div>'
    let endPage =   '<div id="list-end" class="col-12 pb-0 pt-4 m-0 text-center">'+
                        '<p>Data kosong.</p>'+
                    '</div>'
    if(setData) {
        $('#list-data').append(loader)
        $('#list-data').empty()
        $.when(
            $.post(url, dataFilter, function(result){
                result = JSON.parse(result)
                if(result.status) {  
                    result.data.forEach(function(row){
                        let colorStatus = {
                            'Aktif': 'info',
                            'Cuti': 'warning',
                            'Lulus': 'success',
                            'DO': 'danger'
                        }
                        let statusProfil = ''
                        if(row.status_of_profil <= 55){
                            statusProfil = 'danger'
                        }else if(row.status_of_profil > 55 && row.status_of_profil < 75){
                            statusProfil = 'warning'
                        }else if(row.status_of_profil > 75 && row.status_of_profil < 100){
                            statusProfil = 'info'
                        }else if(row.status_of_profil >= 100){
                            statusProfil = 'success'
                        }
                        let list    =   '<div class="card col-lg-2 col-md-4 col-sm-6">'+
                                            '<div class="row mt-2">'+
                                                '<div class="col-12">'+
                                                    '<div class="card-header-btn mt-2 mb-2 p-2">'+
                                                        '<span class="badge badge-danger m-0 btn-left-card text-vsm">'+(row.date_of_entry ? getYear(row.date_of_entry) : "-")+'</span>'+
                                                        '<span class="badge badge-'+colorStatus[row.status]+' m-0 mt-4 btn-left-card text-vsm">'+row.status+'</span>'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-12">'+
                                                    '<div class="card-header-btn mb-2 p-2 dropleft">'+
                                                        '<a href="#" class="m-0 btn-right-card disable-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la flaticon-mark-1"></i></a>'+
                                                        '<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">'+
                                                            '<a class="dropdown-item text-vsm" href="'+BASE_URL+'back/student/tambah-mahasiswa?user_id='+row.user_id+'">Edit</a>'+
                                                            '<a class="dropdown-item text-vsm" href="#" onclick="btnAlpha(this)">Kirimi Email</a>'+
                                                            '<div class="dropdown-divider"></div>'+
                                                            '<a class="dropdown-item text-vsm text-danger" href="#" onclick="btnAlpha(this)">Hapus</a>'+
                                                        '</ul>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="avatar avatar-lg center-img">'+
                                                '<a href="#" class="disable-link"><img src="'+BASE_URL+'assets/'+(row.photo_profile ? row.photo_profile : "img/students/avatars/student.png")+'" alt="foto-profil.jpg" class="avatar-img rounded"></a>'+
                                            '</div>'+
                                            '<div class="card-body p-0 pt-2 pb-2">'+
                                                '<a href="'+BASE_URL+'back/student/profil-mahasiswa?user_id='+row.user_id+'" class="disable-link">'+
                                                    '<p class="text-small text-center text-info pb-0 mb-0">'+(row.full_name ? limitText(row.full_name, 25) : "-")+'</p>'+
                                                    '<p class="text-small text-center text-info pb-0 mb-0"><span class="text-msm">'+(row.nim ? row.nim.toUpperCase() : "-")+'</span> | <span class="text-msm">'+(row.date_of_birth ? getSortDateIND(row.date_of_birth) : "-")+'</span></p>'+
                                                    '<p class="text-small text-center text-success pt-0 pb-0 mt-0 mb-0">'+(row.email ? row.email : "-")+'</p>'+
                                                    '<p class="text-small text-center text-info pt-0 pb-0 mt-0 mb-0">'+(row.phone ? row.phone : "-")+'</p>'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="progress-card m-0 p-0 pb-2">'+
                                                '<div class="progress" style="height: 6px;">'+
                                                    '<div class="progress-bar bg-'+statusProfil+'" role="progressbar" style="width: '+row.status_of_profil+'%" aria-valuenow="'+row.status_of_profil+'" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="'+row.status_of_profil+'% data diri terisi"></div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'
                        $('#list-data').append(list).show('slow')
                    })
                }else {
                    $('#list-loader').remove()
                    $('#list-end').remove()
                    $('#list-data').append(endPage)
                    setData = false
                }
                $('[data-toggle="tooltip"]').tooltip()
            })
        ).done(function(e){
            page++
            $('#list-loader').remove()            
        })
    }
}

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

    var _showDataSetting = function() {
        addListData()

        // add list data when scrool at bottom
        $(window).scroll(function (event) {
            if($(window).scrollTop() + $(window).height() == $(document).height()) {
                let url     = BASE_URL+'back/student/read/'+page
                let loader  =   '<div id="list-loader" class="col-12 p-0 m-0 text-center">'+
                                    '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>'+
                                '</div>'
                let endPage =   '<div id="list-end" class="col-12 pb-0 pt-4 m-0 text-center">'+
                                    '<p>Akhir halaman.</p>'+
                                '</div>'
                if(setData && page != 0) {
                    $('#list-data').append(loader)
                    $.when(
                        $.post(url, dataFilter, function(result){
                            result = JSON.parse(result)
                            if(result.status) {  
                                result.data.forEach(function(row){
                                    let colorStatus = {
                                        'Aktif': 'info',
                                        'Cuti': 'warning',
                                        'Lulus': 'success',
                                        'DO': 'danger'
                                    }
                                    let statusProfil = ''
                                    if(row.status_of_profil <= 55){
                                        statusProfil = 'danger'
                                    }else if(row.status_of_profil > 55 && row.status_of_profil < 75){
                                        statusProfil = 'warning'
                                    }else if(row.status_of_profil > 75 && row.status_of_profil < 100){
                                        statusProfil = 'info'
                                    }else if(row.status_of_profil >= 100){
                                        statusProfil = 'success'
                                    }
                                    let list    =   '<div class="card col-lg-2 col-md-4 col-sm-6">'+
                                                        '<div class="row mt-2">'+
                                                            '<div class="col-12">'+
                                                                '<div class="card-header-btn mt-2 mb-2 p-2">'+
                                                                    '<span class="badge badge-danger m-0 btn-left-card text-vsm">'+getYear(row.date_of_entry)+'</span>'+
                                                                    '<span class="badge badge-'+colorStatus[row.status]+' m-0 mt-4 btn-left-card text-vsm">'+row.status+'</span>'+
                                                                '</div>'+
                                                            '</div>'+
                                                            '<div class="col-12">'+
                                                                '<div class="card-header-btn mb-2 p-2 dropleft">'+
                                                                    '<a href="#" class="m-0 btn-right-card disable-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la flaticon-mark-1"></i></a>'+
                                                                    '<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">'+
                                                                        '<a class="dropdown-item text-vsm" href="'+BASE_URL+'back/student/tambah-mahasiswa?user_id='+row.user_id+'">Edit</a>'+
                                                                        '<a class="dropdown-item text-vsm" href="#" onclick="btnAlpha(this)">Kirimi Email</a>'+
                                                                        '<div class="dropdown-divider"></div>'+
                                                                        '<a class="dropdown-item text-vsm text-danger" href="#" onclick="btnAlpha(this)">Hapus</a>'+
                                                                    '</ul>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="avatar avatar-lg center-img">'+
                                                            '<a href="#" class="disable-link"><img src="'+BASE_URL+'assets/img/students/avatars/student.png" alt="foto-profil.jpg" class="avatar-img rounded"></a>'+
                                                        '</div>'+
                                                        '<div class="card-body p-0 pt-2 pb-2">'+
                                                            '<a href="'+BASE_URL+'back/student/profil-mahasiswa?user_id='+row.user_id+'" class="disable-link">'+
                                                                '<p class="text-small text-center text-info pb-0 mb-0">'+(row.full_name ? limitText(row.full_name, 25) : "-")+'</p>'+
                                                                '<p class="text-small text-center text-info pb-0 mb-0"><span class="text-msm">'+(row.nim ? row.nim.toUpperCase() : "-")+'</span> | <span class="text-msm">'+(row.date_of_birth ? getSortDateIND(row.date_of_birth) : "-")+'</span></p>'+
                                                                '<p class="text-small text-center text-success pt-0 pb-0 mt-0 mb-0">'+(row.email ? row.email : "-")+'</p>'+
                                                                '<p class="text-small text-center text-info pt-0 pb-0 mt-0 mb-0">+62 823 1146 3010</p>'+
                                                            '</a>'+
                                                        '</div>'+
                                                        '<div class="progress-card m-0 p-0 pb-2">'+
                                                            '<div class="progress" style="height: 6px;">'+
                                                                '<div class="progress-bar bg-'+statusProfil+'" role="progressbar" style="width: '+row.status_of_profil+'%" aria-valuenow="'+row.status_of_profil+'" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="'+row.status_of_profil+'% data diri terisi"></div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>'
                                    $('#list-data').append(list).show('slow')
                                })
                            }else {
                                $('#list-loader').remove()
                                $('#list-end').remove()
                                $('#list-data').append(endPage)
                                setData = false
                            }  
                            $('[data-toggle="tooltip"]').tooltip()  
                        })
                    ).done(function(e){
                        page++
                        $('#list-loader').remove()            
                    })
                }
            }
        })
    }

    var _setDisplay = function() {
        let urlParams = new URLSearchParams(window.location.search)
        let myParam = urlParams.get('display')
        if(myParam) {
            $('.btn-display').removeClass('btn-primary')
            $('.btn-display').addClass('btn-light')
            $('#display-'+myParam).removeClass('btn-light')
            $('#display-'+myParam).addClass('btn-primary')
        }
    }

    var _select2 = function() {
        $('.select2-init').select2()
    }

    // Return objects assigned to module
    return {
        init: function() {
            _sidebarMenuSetting()
            _showDataSetting()
            _setDisplay()
            _select2()
        }
    }

}()

// Initialize module
document.addEventListener('DOMContentLoaded', function() {
    PageInit.init();
})