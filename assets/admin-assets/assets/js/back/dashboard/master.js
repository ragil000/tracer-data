var PageInit = function() {

	var _sidebarMenuSetting = function() {
        // remove active parent menu
        $('.nav-item').removeClass('active submenu')
        // set active parent menu
        $('#dasbor').addClass('active')
        // remove aria-expanded
        $('.nav-item > a').removeAttr('aria-expanded')
        // remove active child
        $('.child-nav-item').removeClass('active')
        // remove show
        $('.nav-item > collapse').removeClass('show')
	}

	var _showChartSetting = function() {
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 123,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})
		
		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})
		
		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 2,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})
		
		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d')
		
		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["2017", "2018", "2019"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [76, 126, 112],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		})
		
		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		})

		// Cicle Chart
		Circles.create({
			id:           'task-complete',
			radius:       50,
			value:        80,
			maxValue:     100,
			width:        5,
			text:         function(value){return value + '%';},
			colors:       ['#36a3f7', '#fff'],
			duration:     400,
			wrpClass:     'circles-wrp',
			textClass:    'circles-text',
			styleWrapper: true,
			styleText:    true
		})

		//Notify
		$.notify({
			icon: 'flaticon-alarm-1',
			title: 'Pharmacy Tracer Data',
			message: 'Sistem masih dalam mode alpha (uji coba).',
		},{
			type: 'info',
			placement: {
				from: "bottom",
				align: "right"
			},
			time: 2000,
		});

		// JQVmap
		$('#map-example').vectorMap({
			map: 'world_en',
			backgroundColor: 'transparent',
			borderColor: '#fff',
			borderWidth: 2,
			color: '#e4e4e4',
			enableZoom: true,
			hoverColor: '#35cd3a',
			hoverOpacity: null,
			normalizeFunction: 'linear',
			scaleColors: ['#b6d6ff', '#005ace'],
			selectedColor: '#35cd3a',
			selectedRegions: ['ID', 'US'],
			showTooltip: true,
			onRegionClick: function(element, code, region)
			{
				return false;
			}
		})

		//Chart
		$("#activeUsersChart").sparkline([112,109,120,107,110,85,87,90,102,109,120,99,110,85,87,94], {
			type: 'bar',
			height: '100',
			barWidth: 9,
			barSpacing: 10,
			barColor: 'rgba(255,255,255,.3)'
		});

		var topProductsChart = document.getElementById('topProductsChart').getContext('2d');

		var myTopProductsChart = new Chart(topProductsChart, {
			type:"line",
			data: {
				labels:["January",
				"February",
				"March",
				"April",
				"May",
				"June",
				"July",
				"August",
				"September",
				"October",
				"January",
				"February",
				"March",
				"April",
				"May",
				"June",
				"July",
				"August",
				"September",
				"October",
				"January",
				"February",
				"March",
				"April",
				"May",
				"June",
				"July",
				"August",
				"September",
				"October",
				"January",
				"February",
				"March",
				"April"],
				datasets:[ {
					label: "Sales Analytics", fill: !0, backgroundColor: "rgba(53, 205, 58, 0.2)", borderColor: "#35cd3a", borderCapStyle: "butt", borderDash: [], borderDashOffset: 0, pointBorderColor: "#35cd3a", pointBackgroundColor: "#35cd3a", pointBorderWidth: 1, pointHoverRadius: 5, pointHoverBackgroundColor: "#35cd3a", pointHoverBorderColor: "#35cd3a", pointHoverBorderWidth: 1, pointRadius: 1, pointHitRadius: 5, data: [20, 10, 18, 14, 32, 18, 15, 22, 8, 6, 17, 12, 17, 18, 14, 25, 18, 12, 19, 21, 16, 14, 24, 21, 13, 15, 27, 29, 21, 11, 14, 19, 21, 17]
				}
				]
			},
			options : {
				maintainAspectRatio:!1, legend: {
					display: !1
				}
				, animation: {
					easing: "easeInOutBack"
				}
				, scales: {
					yAxes:[ {
						display:!1, ticks: {
							fontColor: "rgba(0,0,0,0.5)", fontStyle: "bold", beginAtZero: !0, maxTicksLimit: 10, padding: 0
						}
						, gridLines: {
							drawTicks: !1, display: !1
						}
					}
					], xAxes:[ {
						display:!1, gridLines: {
							zeroLineColor: "transparent"
						}
						, ticks: {
							padding: -20, fontColor: "rgba(255,255,255,0.2)", fontStyle: "bold"
						}
					}
					]
				}
			}
		});
	}
	
	// Return objects assigned to module
	return {
		init: function() {
			_sidebarMenuSetting()
			_showChartSetting()
		}
	}

}()

// Initialize module
document.addEventListener('DOMContentLoaded', function() {
	PageInit.init();
})