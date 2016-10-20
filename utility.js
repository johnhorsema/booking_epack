$(function() { // document ready
	var startTime = '09:00';
	var endTime = '18:00';

	$.getScript('randomColor.min.js', function(){
		$.getJSON('events.json',function(e_data){
			$.getJSON('resources_md5.json',function(r_data){
				var event_data = []
				var resource_data = [];

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
					now: '2016-09-07',
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
});