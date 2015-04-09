$(document).ready(function(){


		var miniCarousel = $('.home-slider').bxSlider({
			infiniteLoop: false,
			pager: false,
			prevSelector: $('#home-slider-pager .left'),
			nextSelector: $('#home-slider-pager .right'),
			nextText: '',
			prevText: ''
		});

		//chart
		var ctx = $(".stat").get(0).getContext("2d");
	
		var data = [
			{
		        value: 300,
		        color:"#F7464A",
		        highlight: "#FF5A5E",
		        label: "Red"
		    },
		    {
		        value: 50,
		        color: "#46BFBD",
		        highlight: "#5AD3D1",
		        label: "Green"
		    },
		    {
		        value: 100,
		        color: "#FDB45C",
		        highlight: "#FFC870",
		        label: "Yellow"
		    }
		]

		var myPieChart = new Chart(ctx).Doughnut(data, {
			animationEasing: 'linear',
			animationSteps: 50,
		    animateScale: true
		});

		var legend = myPieChart.generateLegend();
		$('#stats li').append(legend);


});