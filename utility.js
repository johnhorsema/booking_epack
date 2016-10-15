$(function() { // document ready

		$('#calendar').fullCalendar({
			schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
			now: '2016-09-07',
			editable: true, // enable draggable events
			aspectRatio: 2,
			scrollTime: '07:00', // undo default 6am scrollTime
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
			resourceLabelText: 'Equipment',
			resources: [
				{ id: '0ea4ca2ece37d6e3321bacf41dd6d2', title: 'Solder Ball Bumper PacTech' },
				{ id: 'd84a992e3a6847e1851cf8ae95a4f3', title: 'Reflow Soldering Oven Ashai', eventColor: 'green' },
				// { id: 'c', title: 'Auditorium C', eventColor: 'orange' },
				// { id: 'd', title: 'Auditorium D', children: [
				// 	{ id: 'd1', title: 'Room D1' },
				// 	{ id: 'd2', title: 'Room D2' }
				// ] },
			],
			events: JSON.parse(event_data),
		});
		console.log(event_data);
	
	});