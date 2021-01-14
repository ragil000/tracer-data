// $('#datepicker').datepicker({
//     language: 'in'
// })

$('#form-timeline').scroll()

var PageInit = function() {

    var _sidebarMenuSetting = function() {
        // minimize sidebar
        $('.wrapper').addClass('sidebar_minimize')

        // remove active parent menu
        $('.nav-item').removeClass('active submenu')
        // set active parent menu
        $('#parent-kuesioner').addClass('active submenu')
        // remove aria-expanded
        $('.nav-item > a').removeAttr('aria-expanded')
        // set aria-expanded
        $('#parent-kuesioner > a').attr('aria-expanded', 'true')
        // remove active child
        $('.child-nav-item').removeClass('active')
        // set active child
        $('#child-kuesioner-1').addClass('active')
        // remove show
        $('.nav-item > collapse').removeClass('show')
        // set show
        $('#kuesioner').addClass('show')
    }

    var _chartSetting = function() {
        var pieChart    = $('#pieChart')
        var lineChart   = $('#lineChart')
        var lineChart2  = $('#lineChart2')
        var barChart    = $('#barChart')
        var barChart2   = $('#barChart2')

        var myPieChart = new Chart(pieChart, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [50, 35, 15],
                    backgroundColor :["#1d7af3","#f3545d","#fdaf4b"],
                    borderWidth: 0
                }],
                labels: ['Bekerja', 'Membuka usaha', 'Belum bekerja'] 
            },
            options : {
                responsive: true, 
                maintainAspectRatio: false,
                legend: {
                    position : 'bottom',
                    labels : {
                        fontColor: 'rgb(154, 154, 154)',
                        fontSize: 11,
                        usePointStyle : true,
                        padding: 20
                    }
                },
                pieceLabel: {
                    render: 'percentage',
                    fontColor: 'white',
                    fontSize: 14,
                },
                tooltips: false,
                layout: {
                    padding: {
                        left: 20,
                        right: 20,
                        top: 20,
                        bottom: 20
                    }
                }
            }
        })

        var myLineChart = new Chart(lineChart, {
            type: 'line',
            data: {
                labels: ["Media massa", "Pengumuman di kampus", "Teman sesama alumni", "Kerabat/keluarga", "Lainnya"],
                datasets: [{
                    label: "Referensi lowongan kerja",
                    borderColor: "#1d7af3",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#1d7af3",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: 'transparent',
                    fill: true,
                    borderWidth: 2,
                    data: [21, 20, 15, 17, 36]
                }]
            },
            options : {
                responsive: true, 
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels : {
                        padding: 10,
                        fontColor: '#1d7af3',
                    }
                },
                tooltips: {
                    bodySpacing: 4,
                    mode:"nearest",
                    intersect: 0,
                    position:"nearest",
                    xPadding:10,
                    yPadding:10,
                    caretPadding:10
                },
                layout:{
                    padding:{left:15,right:15,top:15,bottom:15}
                }
            }
        })

        var myLineChart = new Chart(lineChart2, {
            type: 'line',
            data: {
                labels: ["Mencari pekerjaan yang sesuai", "Melanjutkan/sedang mempersiapkan pendidikan tingkat lanjut", "Mengikuti suami (menjadi Ibu rumah tangga)", "Membantu orang tua", "Lainnya"],
                datasets: [{
                    label: "Kegiatan saat ini",
                    borderColor: "#1d7af3",
                    pointBorderColor: "#FFF",
                    pointBackgroundColor: "#1d7af3",
                    pointBorderWidth: 2,
                    pointHoverRadius: 4,
                    pointHoverBorderWidth: 1,
                    pointRadius: 4,
                    backgroundColor: 'transparent',
                    fill: true,
                    borderWidth: 2,
                    data: [21, 20, 15, 17, 36]
                }]
            },
            options : {
                responsive: true, 
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels : {
                        padding: 10,
                        fontColor: '#1d7af3',
                    }
                },
                tooltips: {
                    bodySpacing: 4,
                    mode:"nearest",
                    intersect: 0,
                    position:"nearest",
                    xPadding:10,
                    yPadding:10,
                    caretPadding:10
                },
                layout:{
                    padding:{left:15,right:15,top:15,bottom:15}
                }
            }
        })

        var myBarChart = new Chart(barChart, {
			type: 'bar',
			data: {
				labels: ["Sangat tidak relevan", "2", "3", "4", "Sangat relevan"],
				datasets : [{
					label: "Relevansi pekerjaan",
					backgroundColor: 'rgb(23, 125, 255)',
					borderColor: 'rgb(23, 125, 255)',
					data: [10, 15, 17, 13, 20],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
        })

        var myBarChart = new Chart(barChart2, {
			type: 'bar',
			data: {
				labels: ["Sangat tidak relevan", "2", "3", "4", "Sangat relevan"],
				datasets : [{
					label: "Relevansi pekerjaan",
					backgroundColor: 'rgb(23, 125, 255)',
					borderColor: 'rgb(23, 125, 255)',
					data: [10, 15, 17, 13, 20],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
        })
        
    }

    var _formsSetting = function () {
        
        function setListForm() {
            let listForm =  ''

            for(let i = 0; i < history_form['total']; i++) {
                listForm = '<li class="feed-item feed-item-warning">'+
                                '<time class="date" datetime="7-10">'+getSortDateIND(history_form['data'][i].created_at)+' <span class="text-small">'+getTime(history_form['data'][i].created_at)+'</span> </time>'+
                                '<div class="list-card list-'+history_form['data'][i].id+' card-hover m-0 p-2" id="list-'+history_form['data'][i].id+'">'+
                                    '<span class="text">'+history_form['data'][i].title+'<a href="#" class="text-light disable-link" onclick="setForm(\'form\', '+history_form['data'][i].id+')"> "'+history_form['data'][i].description+'"</a></span>'+
                                '</div>'+
                            '</li>'
                $('.list-history').before(listForm)
            }
        }
        setListForm()

        function setFormMaster() {
            $('.header-form').html('<h4 class="card-title">Master Kuesioner</h4>')
        
            let number = 1
            master_form['form'].forEach(result => {
                if(result.type == 'input') {
                    form_input(number, result.question, result.id)
                    number++
                }else if(result.type == 'radio') {
                    form_radio(number, result.question, result.id, result.answers)
                    number++
                }else if(result.type == 'range') {
                    form_range(number, result.question, result.id, result.length, result.minimum, result.maximum)
                    number++
                }else if(result.type == 'date') {
                    form_date(number, result.question, result.id)
                    number++
                }else if(result.type == 'section') {
                    form_section(result.question)
                }
            })

            let html = '<h4><strong>Kuesioner Tracer Data Alumni</strong></h4>'+
                        '<p>Data ini hanya bisa diisi oleh alumni yang terdaftar dalam database kami. Jika anda belum memiliki akun yang terdaftar dalam sistem kami, mohon hubungi admin Sistem Tracer Data Fakultas Farmasi di +62 823 1146 3010 atau <a href="wa.me/6282311463010">klik disini</a> </p>'+
                        '<p class="text-small text-danger">* Mohon diisi dengan data yang sebenar-benarnya, anda bertanggungjawab penuh terhadap informasi yang akan anda berikan pada kuesioner berikut.</p>'
            $('#form-header').html(html)

            html = '<button class="btn btn-success" onclick="createForm(\'master\')">'+
                        '<span class="btn-label">'+
                            '<i class="fa fa-file"></i>'+
                        '</span>'+
                        'Buat Kuesioner'+
                    '</button>'
            $('#btn-create-form').html(html)
        }
        setFormMaster()
    }

    // Return objects assigned to module
    return {
        init: function() {
            _sidebarMenuSetting()
            _chartSetting()
            _formsSetting()
        }
    }

}()

// Initialize module
document.addEventListener('DOMContentLoaded', function() {
    PageInit.init();
})

function setForm(type = 'master', id = 1) {
    $('#set-form').html('')
    $('.list-card').removeClass('card shadow bg-active')
    $('.list-card').addClass('card-hover')
    $('.list-'+id).addClass('card shadow bg-active')
    $('.list-'+id).removeClass('card-hover')
    if(type == 'form') {
        let getById = history_form['data'].find(x => x.id == id)
        let form = JSON.parse(getById['form'])
        $('.header-form').html('<h4 class="card-title">'+getById['title']+' ('+getSortDateIND(getById['created_at'])+' <span class="text-medium">'+getTime(getById['created_at'])+'</span>)</h4>')
        
        let number = 1
        form['form'].forEach(result => {
            if(result.type == 'input') {
                form_input(number, result.question, result.id)
                number++
            }else if(result.type == 'radio') {
                form_radio(number, result.question, result.id, result.answers)
                number++
            }else if(result.type == 'range') {
                form_range(number, result.question, result.id, result.length, result.minimum, result.maximum)
                number++
            }else if(result.type == 'date') {
                form_date(number, result.question, result.id)
                number++
            }else if(result.type == 'section') {
                form_section(result.question)
            }
        })

        let html = '<h4><strong>'+form['title']+'</strong></h4>'+
                        (form['description'] ? '<p>'+form['description']+'</p>' : '')+
                        (form['tag'] ? '<p class="text-small text-danger">* '+form['tag']+'</p>' : '' )
        $('#form-header').html(html)
        html = '<button class="btn btn-success" onclick="createForm(\'form\', '+id+')">'+
                        '<span class="btn-label">'+
                            '<i class="fa fa-file"></i>'+
                        '</span>'+
                        'Kirim Kuesioner'+
                    '</button>'
            $('#btn-create-form').html(html)
    }else if(type == 'master') {
        $('.header-form').html('<h4 class="card-title">Master Kuesioner</h4>')

        let number = 1
        master_form['form'].forEach(result => {
            if(result.type == 'input') {
                form_input(number, result.question, result.id)
                number++
            }else if(result.type == 'radio') {
                form_radio(number, result.question, result.id, result.answers)
                number++
            }else if(result.type == 'range') {
                form_range(number, result.question, result.id, result.length, result.minimum, result.maximum)
                number++
            }else if(result.type == 'date') {
                form_date(number, result.question, result.id)
                number++
            }else if(result.type == 'section') {
                form_section(result.question)
            }
        })

        let html = '<h4><strong>Kuesioner Tracer Data Alumni</strong></h4>'+
                        '<p>Data ini hanya bisa diisi oleh alumni yang terdaftar dalam database kami. Jika anda belum memiliki akun yang terdaftar dalam sistem kami, mohon hubungi admin Sistem Tracer Data Fakultas Farmasi di +62 823 1146 3010 atau <a href="wa.me/6282311463010">klik disini</a> </p>'+
                        '<p class="text-small text-danger">* Mohon diisi dengan data yang sebenar-benarnya, anda bertanggungjawab penuh terhadap informasi yang akan anda berikan pada kuesioner berikut.</p>'
        $('#form-header').html(html)

        html = '<button class="btn btn-success" onclick="createForm(\'master\')">'+
                        '<span class="btn-label">'+
                            '<i class="fa fa-file"></i>'+
                        '</span>'+
                        'Buat Kuesioner'+
                    '</button>'
        $('#btn-create-form').html(html)
    }
}

function createForm(type = 'master', id = 1) {
    window.location = BASE_URL+'back/form/create-form?type='+type+(id != 1 ? '&id='+id : '')
}