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
		        value: 20000,
		        color:"#e7e930",
		        highlight: "#f1f327",
		        label: "Program Spending"
		    },
		    {
		        value: 15000,
		        color: "#38558e",
		        highlight: "#1f4798",
		        label: "Ski Camp"
		    },
		    {
		        value: 10000,
		        color: "#647bab",
		        highlight: "#5978ba",
		        label: "Administration"
		    },
		    {
		        value: 3000,
		        color: "#c7c6c4",
		        highlight: "#949491",
		        label: "Ski Day"
		    },
		    {
		        value: 1500,
		        color: "#e4e4e2",
		        highlight: "#dddcda",
		        label: "Bursaries"
		    }
		]

		var myPieChart = new Chart(ctx).Doughnut(data, {
			animationEasing: 'linear',
			animationSteps: 50,
		    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span class=\"color\" style=\"background-color:<%=segments[i].fillColor%>\"></span><span class=\"value\">$<%=numberWithCommas(segments[i].value)%></span><%if(segments[i].label){%><span class=\"label\"><%=segments[i].label%></span><%}%></li><%}%></ul>"
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


/* Utility Functions */
function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}