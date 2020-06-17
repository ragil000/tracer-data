// button alpha
function btnAlpha(element) {
    swal({
        title: 'Sistem mode alpha.',
        text: 'Maaf, sistem masih dalam mode alpha. Hubungi developer sistem ini untuk melanjutkan project.',
        buttons:{
            confirm: {
                text : 'Ok',
                className : 'btn btn-success'
            },
            cancel: {
                visible: false
            }
        }
    })
}

// sweet alert konfirmasi
function btnConfirm(element) {
    let btnFunction = $(element).data('type')
    let btnMessage  = $(element).data('message')
    let formChild   = $('form .form-control')
    let validation  = true
    for(i=0; i < formChild.length; i++) {
        console.log(i)
        if($(formChild[i]).val().trim() == '') {
            $(formChild[i]).addClass('is-invalid')
            validation = false
        }
    }
    if(validation) {
        $('.form-control').removeClass('is-invalid')
        swal({
            title: 'Apakah anda yakin?',
            text: btnMessage,
            buttons:{
                confirm: {
                    text : 'Ya',
                    className : 'btn btn-success'
                },
                cancel: {
                    visible: true,
                    text: 'Batal',
                    className: 'btn btn-danger'
                }
            }
        }).then((status) => {
            if (status) {
                window[btnFunction](element)      
            } else {
                swal.close();
            }
        })
    }
}

// button cancel untuk kembali ke page parent nya
function btnCancel(element) {
    let pageUrl             = $(element).data('url')
    window.location.href    = BASE_URL+pageUrl
}

// button create untuk menyimpan data kedalam database
function btnCreate(element) {
    let checkAjax   = $(element).data('ajax')
    let refressPage = $(element).data('refress')
    if(checkAjax == 'none') {
        $(element).removeAttr('onclick').attr('type', 'submit').trigger('click')
    }else if(checkAjax == 'exist') {
        let url         = $(element).data('url')
        let data        = $('form').serialize()

        swalLoading()
        $.when($.post(url, data)).done(function(result){
            $.when(swalLoading(false)).done(function(e){
                result = JSON.parse(result)
                if(refressPage) {
                    $.when(swalAlert(result.status, result.message)).done(function(e){
                        // window.location.reload(30)
                    })
                }else {
                    swalAlert(result.status, result.message)
                }
            })
        })
    }
}

// function loading proses ajax
function swalLoading(status = true) {
    if(status) {
        swal({
            title: "Mohon tunggu...",
            text: "Jangan keluarkan halaman ini.",
            icon: BASE_URL+'assets/img/components/806.gif',
            button: false,
            closeOnClickOutside: false
        })
    }else {
        swal.close()
    }
}

// function alert success atau error/gagal
function swalAlert(status = true, message = '') {
    if(status) {
        swal({
            icon: "success",
            text: message, 
            button: false,
            outsideBackground: false,
            timer: 2500
        })
    }else {
        swal({
            icon: "error",
            text: message, 
            button: false,
            outsideBackground: false,
            timer: 2500
        })
    }
}

// get Indonesian date
function _getDateIND(date){
    let bulan = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];

    let hari = [
        'Ahad',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jum\'at',
        'Sabtu',
    ];

    let tanggal = new Date(date);

    return hari[tanggal.getDay()]+', '+tanggal.getDate()+' '+bulan[tanggal.getMonth()]+' '+tanggal.getFullYear();
}

// get Indonesian sort date
function _getSortDateIND(date){
    let bulan = [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    ];

    let tanggal = new Date(date);

    return tanggal.getDate()+' '+bulan[tanggal.getMonth()]+' '+tanggal.getFullYear();
}

// get Year
function _getYear(date){
    let year = new Date(date);
    return year.getFullYear();
}

// limit text
function _limitText(string, limit = 100) {

    string = string.replace(/(<([^>]+)>)/ig,"")
    
    if (string.length > limit) {

        // truncate string
        let stringCut = string.substring(0, limit)
        let endPoint = stringCut.indexOf(' ')

        //if the string doesn't contain any space then it will cut without word basis.
        string = endPoint? string.substring(0, limit) : string.substring(0)
    }
    return string
}