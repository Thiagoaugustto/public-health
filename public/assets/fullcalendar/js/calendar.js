document.addEventListener('DOMContentLoaded', function() {

  /* initialize the external events
  -----------------------------------------------------------------*/

  var containerEl = document.getElementById('external-events-list');
  new FullCalendar.Draggable(containerEl, {
    itemSelector: '.fc-event',
    eventData: function(eventEl) {
      return {
        title: eventEl.innerText.trim()
      }
    }
  });

  /* initialize the calendar
  -----------------------------------------------------------------*/

  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
    locale: 'pt-br',
    navLinks: true,
    eventLimit: true,
    selectable: true,
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    drop: function(element) {

      if (document.getElementById('drop-remove').checked) {
        element.draggedEl.parentNode.removeChild(element.draggedEl);
      }
    },
    eventDrop: function(element){

      let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
      let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

      let newEvent = {
        _method:'PUT',
        title: element.event.title,
        id: element.event.id,
        start: start,
        end: end
      };

      sendEvent(routeEvents('routeEventUpdate'), newEvent);
    },

    eventResize: function(element){

      let start = moment(element.event.start).format("YYYY-MM-DD HH:mm:ss");
      let end = moment(element.event.end).format("YYYY-MM-DD HH:mm:ss");

      let newEvent = {
        _method:'PUT',
        title: element.event.title,
        id: element.event.id,
        start: start,
        end: end
      };

      sendEvent(routeEvents('routeEventUpdate'), newEvent);
    },

    eventClick: function(element){

      clearMessages('#message');
      resetForm("#formEvent");

      $("#modalCalendar").modal('show');
      $("#modalCalendar #titleModal").text('Alterar Evento');
      $("#modalCalendar button.deleteEvent").css("display", "flex");

      let id = element.event.id;
      $("#modalCalendar input[name='id']").val(id);

      let type = element.event.type;
      $("#modalCalendar input[name='type']").val(type);

      let title = element.event.title;
      $("#modalCalendar input[name='title']").val(title);

      let phone = element.event.phone;
      $("#modalCalendar input[name='phone']").val(phone);

      let insurance = element.event.insurance;
      $("#modalCalendar input[name='insurance']").val(insurance);

      let start = moment(element.event.start).format("DD/MM/YYYY HH:mm:ss");
      $("#modalCalendar input[name='start']").val(start);

      let end = moment(element.event.end).format("DD/MM/YYYY HH:mm:ss");
      $("#modalCalendar input[name='end']").val(end);

      let color = element.event.backgroundColor;
      $("#modalCalendar input[name='color']").val(color);

      let description = element.event.extendedProps.description;
      $("#modalCalendar textarea[name='description']").val(description);
    },

    select: function(element){

      clearMessages('#message');
      resetForm("#formEvent");

      $("#modalCalendar").modal('show');
      $("#modalCalendar #titleModal").text('Solicitar Agendamento');
      $("#modalCalendar button.deleteEvent").css("display", "none");

      let start = moment(element.start).format("DD/MM/YYYY HH:mm:ss");
      $("#modalCalendar input[name='start']").val(start);

      let end = moment(element.end).format("DD/MM/YYYY HH:mm:ss");
      $("#modalCalendar input[name='end']").val(end);

      $("#modalCalendar input[name='color']").val("#3788D8");

      calendar.unselect();
    },

    events: routeEvents('routeLoadEvents'),
  });
  calendar.render();

});