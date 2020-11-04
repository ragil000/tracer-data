var searchParams = new URLSearchParams(window.location.search)
if(searchParams.has('user_id')) {
    let param = searchParams.get('user_id')
    if(param != ACCOUNT_DATA.id) {
        $('.form-control').attr('disabled', 'disabled')
        $('.btn').attr('hidden', '')
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

        // set active menu
        // if(searchParams.has('user_id')) {
        //     $('#mahasiswa').addClass('active')
        // }else {
        //     $('#dasbor').addClass('active')
        // }
    }

    var _select2 = function() {
        $('.select2-init').select2()
    }

    // Return objects assigned to module
    return {
        init: function() {
            _sidebarMenuSetting()
            _select2()
        }
    }

}()

// Initialize module
document.addEventListener('DOMContentLoaded', function() {
    PageInit.init();
})

function getDatepicker(element) {
    let regex = /^\d{4}-\d{2}-\d{2}$|^\d{4}-\d{1}-\d{1}$/g
    var myDataPicker = $(element).datepicker({ 
        language : 'in', 
        dateFormat: 'yyyy-mm-dd', 
        // autoClose : true
    }).data('datepicker')
    if($(element).val() && regex.test($(element).val())) {
        myDataPicker.selectDate(new Date($(element).val()))
    }else {
        myDataPicker.selectDate()
    }
}

function setNewJob() {
    let countRow    = parseInt($('#job-count-row').val())+1
    let row = '<div class="col-12 card">'+
                    '<div class="row mt-3">'+
                        '<input type="text" name="job_id" value="" hidden>'+
                        '<div class="col-md-6">'+
                            '<div class="form-group form-group-default">'+
                                '<label>Nama Institusi/Perusahaan</label>'+
                                '<input type="text" class="form-control" placeholder="Nama institusi/perusahaan" value="PT. Kimia Farma">'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-6">'+
                            '<div class="form-group form-group-default">'+
                                '<label>Tanggal Mulai Bekerja</label>'+
                                '<input type="text" class="form-control" data-language="in" data-position="bottom left" onfocus="getDatepicker(this)" id="datepicker8" name="datepicker" value="2015-01-01" placeholder="Birth Date">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row mt-3">'+
                        '<div class="col-md-6">'+
                            '<div class="form-group form-group-default">'+
                                '<label>Posisi/Jabatan</label>'+
                                '<input type="text" class="form-control" value="Asisten Apoteker" name="address" placeholder="Posisi/jabatan">'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-6">'+
                            '<div class="form-group form-group-default">'+
                                '<label>Gaji (Rp per bulan)</label>'+
                                '<input type="text" class="form-control" value="5.000.000" name="address" placeholder="Gaji">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div class="row mt-3">'+
                        '<div class="col-md-12">'+
                            '<div class="form-group form-group-default">'+
                                '<label>Alamat Instansi/Perusahaan</label>'+
                                '<input type="text" class="form-control" value="JL. Raya Bogor, Km 31. No.61, Sukamaju, Kec. Cilodong, Kota Depok, Jawa Barat 16415" name="address" placeholder="Alamat Orang Tua/Wali">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'
    $('#btn-job').after(row)
}

$('.btn-delete-archievement').hide()
if(parseInt($('#data-from-database').val()) > 0) {
    $('.btn-delete-archievement').show()
}
function setNewArchievement() {
    let countRow    = parseInt($('#archievement-count-row').val())+1
    let row = '<div class="col-12 card" id="row-archievement-'+countRow+'">'+
                '<div class="row mt-3">'+
                    '<div class="col-12">'+
                        '<button type="button" class="btn btn-sm btn-icon btn-danger btn-delete-archievement" data-row="'+countRow+'" onclick="deleteArchievement(this)">'+
                            '<i class="fa fa-trash text-xsmall"></i>'+
                        '</button>'+
                    '</div>'+
                '</div>'+
                '<div class="row mt-3">'+
                    '<input type="text" name="archievement_id[]" value="" hidden>'+
                    '<div class="col-md-6">'+
                        '<div class="form-group form-group-default">'+
                            '<label>Nama Prestasi</label>'+
                            '<input type="text" class="form-control required" name="archievement_name[]" placeholder="Nama institusi/perusahaan" value="">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-6">'+
                        '<div class="form-group form-group-default">'+
                            '<label>Bidang Prestasi</label>'+
                            '<input type="text" class="form-control required" name="field_of_archievement[]" placeholder="Bidang prestasi" value="">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="row mt-3">'+
                    '<div class="col-md-6">'+
                        '<div class="form-group form-group-default">'+
                            '<label>Tanggal Penghargaan</label>'+
                            '<input type="text" class="form-control required" data-language="in" data-position="bottom left" onclick="getDatepicker(this)" name="date_of_archievement[]" placeholder="Tanggal penghargaan" value="">'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-6">'+
                        '<div class="form-group form-group-default">'+
                            '<label>Skala Prestasi</label>'+
                            '<input type="text" class="form-control required" name="regional_level[]" placeholder="Skala prestasi" value="">'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="row mt-3">'+
                    '<div class="col-md-6">'+
                        '<div class="form-group form-group-default">'+
                            '<label>Detail Prestasi</label>'+
                            '<textarea type="text" class="form-control" name="archievement_detail[]" placeholder="Detail prestasi"></textarea>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-6">'+
                        '<div class="form-group form-group-default">'+
                            '<label>File Bukti</label>'+
                            '<button type="button" onclick="clickUpload(\'#archievement_file_'+countRow+'\', \'#text-archievement-'+countRow+'\')" class="btn btn-sm btn-primary disable-link">'+
                                '<i class="icon-doc"></i> <span id="text-archievement-'+countRow+'">Pilih File</span>'+
                            '</button>'+
                            '<input type="file" id="archievement_file_'+countRow+'" class="form-control" name="archievement_file[]" placeholder="File sertifikat/penghargaan/bukti lain" data-type="jpg,jpeg,png,doc,docx,pdf" data-size="2240000" hidden>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'
            $('#btn-archievement').after(row)
            $('#archievement-count-row').val(countRow)
            let dataFromDatabase = $('#data-from-database').val()
            if(dataFromDatabase > 0) {
                $('.btn-delete-archievement').show()
            }else {
                $('.btn-delete-archievement').hide()
            }
}

function deleteArchievement(element) {
    let countRow    = parseInt($('#archievement-count-row').val())-1
    let row = $(element).data('row')
    $('#row-archievement-'+row).remove()
    $('#archievement-count-row').val(countRow)
    let dataFromDatabase = $('#data-from-database').val()
    if(dataFromDatabase > 0) {
        $('.btn-delete-archievement').show()
    }else {
        $('.btn-delete-archievement').hide()
    }
}

$('#form-study').submit(function (e) {
    e.preventDefault()
    formData(this)
})

$('#form-archievement').submit(function (e) {
    e.preventDefault()
    formData(this)
})