$(function() {

	$('.date-time').mask('00/00/0000 00:00:00');

	$('.phone').mask('(00) 00000-0000');
	
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$(".deleteEvent").click(function (){

		let id = $("#modalCalendar input[name='id']").val();

		let Event = {
			id: id,
			_method: 'DELETE'
		};

		let route = routeEvents('routeEventDelete');
		sendEvent(route, Event);

	});

	$(".saveEvent").click(function() {

		let id = $("#modalCalendar input[name='id']").val();

		let type = $("#modalCalendar input[name='type']").val();

		let title = $("#modalCalendar input[name='title']").val();

		let phone = $("#modalCalendar input[name='phone']").val();

		let insurance = $("#modalCalendar input[name='insurance']").val();

		let start = moment($("#modalCalendar input[name='start']").val(), "DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

		let end = moment($("#modalCalendar input[name='end']").val(), "DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss")

		let color = $("#modalCalendar input[name='color']").val();

		let description = $("#modalCalendar textarea[name='description']").val();

		let Event = {
			type: type,
			title: title,
			phone: phone,
			insurance: insurance,
	        start: start,
	        end: end,
	        color: color,
	        description: description,
		};

		let route;

		if(id == ''){
			route = routeEvents('routeEventStore'); 
		}else {
			route = routeEvents('routeEventUpdate');
			Event.id = id;
			Event._method = 'PUT';
		}

		sendEvent(route, Event);
	});

});

function sendEvent(route, data_){

	$.ajax({
		url:route,
		data:data_,
		method:'POST',
		dataType: 'json',
		success:function (json) {
			if (json){
				location.reload();
			}
		},
		error:function (json) {
			
			let responseJSON = json.responseJSON;

			$("#message").html(loadErrors(responseJSON));
		}
	});
}

function loadErrors(response) {

	let boxAlert = `<div class="alert alert-danger">`;

	for (let fields in response){
		boxAlert += `<span>${response[fields]}</span><br/>`;
	}

	boxAlert += `</div>`;

	return boxAlert.replace(/\,/g, "<br/>");
}

function routeEvents(route) {
	return document.getElementById('calendar').dataset[route];
}

function clearMessages(element){
	$(element).text('');
}

function resetForm(form){
	$(form)[0].reset();
}