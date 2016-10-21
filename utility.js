$(function() { // document ready
	// Fullcalendar
	$.getScript('randomColor.min.js', function(){
		$.getJSON('events.json',function(e_data){
			$.getJSON('resources_md5.json',function(r_data){
				var event_data = []
				var resource_data = [];
				var startTime = '09:00';
				var endTime = '18:00';

				//Pre-process event_data
				e_data.forEach(function(item){
					event_data.push({
						id: item.id,
						title: item.title,
						resourceId: item.resourceId,
						start: item.start.replace(' ','T'),
						end: item.end.replace(' ','T')
					});
				});

				//Pre-process resource_data
				r_data.forEach(function(item){
					resource_data.push({
						id: item.md5,
						title: item.title,
						eventColor: randomColor({luminosity: 'dark'})
					});
				});

				//Initialize calendar
				$('#calendar').fullCalendar({
					schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
					now: moment().format('YYYY-MM-DD'),
					editable: false, // enable draggable events
					aspectRatio: 1.8,
					scrollTime: startTime, // undo default 6am scrollTime
					header: {
						left: 'today prev,next',
						center: 'title',
						right: 'timelineDay,agendaWeek,listWeek'
					},
					defaultView: 'timelineDay',
					views: {
						timelineThreeDays: {
							type: 'timeline',
							duration: { days: 3 }
						}
					},
					businessHours: {
					    // days of week. an array of zero-based day of week integers (0=Sunday)
					    dow: [ 1, 2, 3, 4, 5 ], // Monday - Friday

					    start: startTime,
					    end: endTime
					},
					resourceLabelText: 'Equipment',
					resources: resource_data,
					events: event_data
				});
			});
		});
	});

	// Book Form
	// Set times
	$(".today").attr('value', moment().format('YYYY-MM-DD'));
	$(".today").append(' ['+moment().format('YYYY-MM-DD')+']');
	$(".tomorrow").attr('value', moment().add(1, 'days').format('YYYY-MM-DD'));
	$(".tomorrow").append(' ['+moment().add(1, 'days').format('YYYY-MM-DD')+']');
	$(".nextweek").attr('value', moment().add(7, 'days').format('YYYY-MM-DD'));
	$(".nextweek").append(' ['+moment().add(7, 'days').format('YYYY-MM-DD')+']');

	// hide all lists
	$(".lists li").hide();

	// select third list item
	var liToSelect = 1;
	$(".nav.nav-pills li:eq("+(liToSelect-1)+")").addClass("active");
	$("#"+liToSelect).show();

	// dynamically activate list items when clicked
	$(".nav.nav-pills li").on("click",function(){
	  $(".nav.nav-pills li").removeClass("active");
	  $(this).addClass("active");
	  $(".lists li").hide();
	  $(".lists li:eq("+ $(this).index() +")").show();
	});

	// Typeahead
	$.getJSON('resources_md5.json',function(r_data){
		var equipment = [];
		//Pre-process resource_data
		r_data.forEach(function(item){
			equipment.push(item.title);
		});
		$('.typeahead').typeahead({
		  source: equipment,
		  minLength: 0,
		  showHintOnFocus: true
		});
	});

	// Modal data population
	$("a[data-target='#confirmation']").on("click", function(){
		var data = {
			Username: $("[name='helper-name']").val(),
			Date: $("[name='helper-date']").val(),
			Time: $("[name='helper-slot']").val(),
			Equipment: $("[name='helper-equip']").val()
		};
		function print_result(obj){
			$("#confirm-btn").toggleClass('disabled', false);
			$("#confirm-btn").attr('disabled', false);
			var result = '<table class="table table-bordered">';
			for(var key in obj){
				if(obj[key]==''){
					$("#confirm-btn").toggleClass('disabled', true);
					$("#confirm-btn").attr('disabled', true);
					obj[key]='<span class="text-danger">Missing</span>';
				}
				result = result+'<tr><td><strong>'+key+'</strong></td><td>'+obj[key]+'</td></tr>'
			}
			result+='</table>'
			return result;
		}
		$("#confirmed-data").html(print_result(data));
	});
});