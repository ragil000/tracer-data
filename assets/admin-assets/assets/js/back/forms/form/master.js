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

    // Return objects assigned to module
    return {
        init: function() {
            _sidebarMenuSetting()
            _chartSetting()
        }
    }

}()

// Initialize module
document.addEventListener('DOMContentLoaded', function() {
    PageInit.init();
})
