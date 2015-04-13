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
		var helpers = Chart.helpers;

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
		$('#stats li .canvas-holder').append(legend);

		helpers.each($('ul.doughnut-legend li'), function(legendNode, index){
			helpers.addEvent(legendNode, 'mouseover', function(){
				var activeSegment = myPieChart.segments[index];
				activeSegment.save();
				activeSegment.fillColor = activeSegment.highlightColor;
				myPieChart.showTooltip([activeSegment]);
				activeSegment.restore();
			});
		});

		helpers.addEvent($('ul.doughnut-legend'), 'mouseout', function(){
			myPieChart.draw();
		});



		/*var legendHolder = document.createElement('div');
		legendHolder.innerHTML = moduleDoughnut.generateLegend();
		
		// Include a html legend template after the module doughnut itself
		helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
			helpers.addEvent(legendNode, 'mouseover', function(){
				var activeSegment = moduleDoughnut.segments[index];
				activeSegment.save();
				activeSegment.fillColor = activeSegment.highlightColor;
				moduleDoughnut.showTooltip([activeSegment]);
				activeSegment.restore();
			});
		});
		helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
			moduleDoughnut.draw();
		});
		canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);*/


});