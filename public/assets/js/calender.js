
    // var reservation_from_database = @json($reservations);

    var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {

    // initialView: 'multiMonthFourMonth',
        initialView: "dayGridMonth",
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listMonth'
        },
        selectable: true,
        editable: true,
        initialDate: new Date(),
        events: reservation_from_database,
        buttonText:{
          today: 'اليوم',
          month: 'شهري',
          week: 'اسبوعي',
          day: 'يومي',
          list: 'قائمة'

        },
        views: {
          month: {
            titleFormat: {
              month: "long",
              year: "numeric"
            }
          },
          agendaWeek: {
            titleFormat: {
              month: "long",
              year: "numeric",
              day: "numeric"
            }
          },
          agendaDay: {
            titleFormat: {
              month: "short",
              year: "numeric",
              day: "numeric"
            }
          },
          multiMonthFourMonth: {
          type: 'multiMonth',
          duration: { months: 12 }
          }
        },
    });

    calendar.render();
