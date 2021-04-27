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
function btnConfirm(element, form = null) {
    let btnFunction = $(element).data('type')
    let btnMessage  = $(element).data('message')
    let formChild   = form ? $('#'+form+' .form-control') : $('form .form-control')
    let validation  = true
    for(i=0; i < formChild.length; i++) {
        if($(formChild[i]).hasClass('required')) {
            if($(formChild[i]).val().trim() == '') {
                if(formChild[i].nodeName == 'SELECT') {
                    if($(formChild[i]).next('small').length <= 0) {
                        $(formChild[i]).after('<small class="text-danger">Tidak boleh kosong, harus dipilih.</small>')
                    }
                }else {
                    if(!$(formChild[i]).hasClass('is-invalid')) {
                        $(formChild[i]).addClass('is-invalid')
                    }

                    if($(formChild[i]).next('small').length <= 0) {
                        $(formChild[i]).after('<small class="text-danger">Tidak boleh kosong, harus diisi.</small>')
                    }
                }
                validation = false
            }else {
                if($(formChild[i]).next('small').length > 0) {
                    $(formChild[i]).next('small').remove()
                }

                if($(formChild[i]).hasClass('is-invalid')) {
                    $(formChild[i]).removeClass('is-invalid')
                }
            }
        }
    }

    if(validation) {
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
                window[btnFunction](element, form)      
            } else {
                swal.close();
            }
        })
    }
}

// disable enter
$('.disable-enter').on('keyup keypress', function(e) {
    let keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
        e.preventDefault();
        return false;
    }
})

// button cancel untuk kembali ke page parent nya
function btnCancel(element) {
    let pageUrl             = $(element).data('url')
    window.location.href    = BASE_URL+pageUrl
}

// button create untuk menyimpan data kedalam database
function btnCreate(element, form = null) {
    let formData = $(element).data('form')
    let checkAjax   = $(element).data('ajax')
    let refressPage = $(element).data('refress')
    if(!checkAjax) {
        $(element).removeAttr('onclick').attr('type', 'submit').trigger('click')
    }else{
        let url         = $(element).data('url')
        let data
        if(formData) {
            if(form) {
                $('#'+form).submit()
            }else {
                $(form).submit()
            }
        }else {
            if(form) data = $('#'+form).serialize()
            else data = $('form').serialize()
            swalLoading()
            $.when($.post(url, data)).done(function(result){
                console.log('ini', result)
                $.when(swalLoading(false)).done(function(e){
                    result = JSON.parse(result)
                    if(refressPage) {
                        swalAlert(result.status, result.message).then(function(e) {
                            window.location.reload(5)
                        })
                    }else {
                        swalAlert(result.status, result.message)
                    }
                })
            })
        }
    }
}

// button update untuk mengupdate data dalam database
function btnUpdate(element, form = null) {
    let formData = $(element).data('form')
    let checkAjax   = $(element).data('ajax')
    let refressPage = $(element).data('refress')
    if(!checkAjax) {
        $(element).removeAttr('onclick').attr('type', 'submit').trigger('click')
    }else{
        let url         = $(element).data('url')
        let data
        if(formData) {
            if(form) {
                $('#'+form).submit()
            }else {
                $(form).submit()
            }
        }else {
            if(form) data = $('#'+form).serialize()
            else data = $('form').serialize()
            swalLoading()
            $.when($.post(url, data)).done(function(result){
                console.log('resulkt', result)
                $.when(swalLoading(false)).done(function(e){
                    result = JSON.parse(result)
                    if(refressPage) {
                        swalAlert(result.status, result.message).then(function(e) {
                            // window.location.reload(5)
                        })
                    }else {
                        swalAlert(result.status, result.message)
                    }
                })
            })
        }
    }
}

function formData(element, formdata) {
    let data = new FormData(element)
    let url = $(element).data('url')
    swalLoading()

    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (result) {
            console.log('ini', result)
            result = JSON.parse(result)
            swalAlert(result.status, result.message).then(function(e) {
                // window.location.reload(5)
            })
        },
        cache: false,
        contentType: false,
        processData: false
    })
}

// function loading proses ajax
function swalLoading(status = true) {
    if(status) {
        swal({
            title: "Mohon tunggu...",
            text: "Jangan keluar dari halaman ini.",
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
    return new Promise((resolve, reject) => {
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
        setTimeout((e) => { resolve(true) }, 2500)        
    })
}

// upload file
function clickUpload(selectorClick, selectorText) {
    $(selectorClick).trigger('click')
    $(selectorClick).change(function(){
        uploadValidator(this, selectorText)
    })
}

function uploadValidator(element, setText) {
    if (element.files && element.files[0]) {
        let reader = new FileReader()
        let allowType = $(element).data('type')
        allowType = allowType.split(/[, ]/g)
        let allowSize = $(element).data('size')
        let type = mimetype(element.files[0].type)
        let size = element.files[0].size
        if(allowType.includes(type)) {
            if(size <= allowSize) {
                $(setText).html(element.files[0].name)
                $(element).next('small').remove()
            }else {
                $(element).next('small').remove()
                $(element).after('<small class="text-danger">Ukuran file melebihi yang diperbolehkan ('+MB(allowSize)+'MB).</small>')
                $(element).val('')
            }
        }else {
            $(element).next('small').remove()
            $(element).after('<small class="text-danger">Tipe file tidak diizinkan.</small>')
            $(element).val('')
        }
    }else {
        $(element).val('')
    }
}

function mimetype(string) {
    let mimeTypeLists = {
        'application/msword': 'doc',
        'application/pdf': 'pdf',
        'application/vnd.ms-excel': 'xls',
        'application/vnd.ms-powerpoint': 'ppt',
        'application/vnd.openxmlformats-officedocument.presentationml.presentation': 'pptx',
        'apadsheetml.sheet': 'xlsx',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document': 'docx',
        'image/jpeg': 'jpg',
        'image/png': 'png'
    }

    let type
    for(let [key, value] of Object.entries(mimeTypeLists)) {
        if(string == key) {
            type = value
            continue
        }
    }

    if(type) {
        return type
    }else {
        return false
    }
}

function MB(size) {
    let sizeMB = (size/(1024*1024)).toFixed(2)
    return sizeMB
}
// end

function toogle(element, selector, trigger, required = false) {
    let value = $(element).val()
    if(required) {
        if(value == trigger) {
            if($(selector).is('[hidden]')) {
                $(selector).removeAttr('hidden')
                $(selector).addClass('required')
            }
        }else {
            if(!$(selector).is('[hidden]')) {
                $(selector).attr('hidden', '')
                if($(selector).next('small').length > 0) {
                    $(selector).next('small').remove()
                }
                if($(selector).hasClass('is-invalid')) {
                    $(selector).removeClass('is-invalid')
                }
                $(selector).removeClass('required')
            }
        }
    }else {
        if(value == trigger) {
            if($(selector).is('[hidden]')) {
                $(selector).removeAttr('hidden')
            }
        }else {
            if(!$(selector).is('[hidden]')) {
                $(selector).attr('hidden', '')
            }
        }
    }
}

// get Indonesian date
function getDateIND(date){
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
function getSortDateIND(date){
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
function getYear(date){
    let year = new Date(date);
    return year.getFullYear();
}

// get time
function getTime(date){
    let newDate = new Date(date);
    
    return newDate.getHours()+':'+newDate.getMinutes()+':'+newDate.getSeconds()+' WITA';
}

// limit text
function limitText(string, limit = 100) {

    string = string.replace(/(<([^>]+)>)/ig,"")
    
    if (string.length > limit) {

        // truncate string
        let stringCut = string.substring(0, limit)
        let endPoint = stringCut.indexOf(' ')

        //if the string doesn't contain any space then it will cut without word basis.
        string = endPoint ? string.substring(0, limit) : string.substring(0)
        string = string+'...'
    }
    return string
}