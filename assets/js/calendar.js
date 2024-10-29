(function (factory) {
  typeof define === 'function' && define.amd ? define(factory) :
    factory();
})((function () {
  'use strict';

  /* -------------------------------------------------------------------------- */

  const camelize = str => {
    const text = str.replace(/[-_\s.]+(.)?/g, (_, c) =>
      c ? c.toUpperCase() : ''
    );
    return `${text.substr(0, 1).toLowerCase()}${text.substr(1)}`;
  };

  const getData = (el, data) => {
    try {
      return JSON.parse(el.dataset[camelize(data)]);
    } catch (e) {
      return el.dataset[camelize(data)];
    }
  };

  /* -------------------------------------------------------------------------- */
  /*                                   Calendar                                 */

  /* -------------------------------------------------------------------------- */
  const renderCalendar = (el, option) => {
    const { merge } = window._;

    const options = merge(
      {
        locale: 'pt-br', // Define o idioma para português do Brasil
        initialView: 'dayGridMonth',
        weekNumberCalculation: 'ISO',
        editable: false, // Desativa a edição para impedir o drag-and-drop
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek' // Remove a opção de visualização diária
        },
        buttonText: {
          today: 'Hoje',
          month: 'Mês',
          week: 'Semana' // Visualização de semana
        },
        noEventsText: 'Nenhum evento encontrado', // Mensagem quando não houver eventos
        views: {
          dayGridMonth: {
            titleFormat: { year: 'numeric', month: 'long' } // Capitalização do mês
          },
          timeGridWeek: {
            titleFormat: { day: 'numeric', month: 'long', year: 'numeric' }, // Formata o título da semana
            dayHeaderFormat: { weekday: 'short' }, // Formata o cabeçalho da semana para exibir apenas o nome do dia
            allDaySlot: true, // Mostra o slot para eventos de dia todo
            expandRows: true, // Faz as linhas se expandirem para ocupar o espaço disponível
            slotLabelFormat: null, // Remove os rótulos de horário
            height: 'auto', // Ajusta a altura para se expandir automaticamente
            nowIndicator: true // Mostra uma linha para indicar o horário atual
          }

        }
      },
      option
    );

    const calendar = new window.FullCalendar.Calendar(el, options);
    calendar.render();

    // Função para capitalizar o título do calendário
    const capitalizeMonthTitle = () => {
      const titleElement = document.querySelector('.fc-toolbar-title');
      if (titleElement) {
        titleElement.textContent = titleElement.textContent.charAt(0).toUpperCase() + titleElement.textContent.slice(1);
      }
    };

    // Capitaliza o título na renderização inicial e ao mudar de mês
    calendar.on('datesSet', capitalizeMonthTitle);

    document
      .querySelector('.navbar-vertical-toggle')
      ?.addEventListener('navbar.vertical.toggle', () => calendar.updateSize());

    return calendar;
  };

  const fullCalendarInit = () => {
    const { getData } = window.phoenix.utils;

    const calendars = document.querySelectorAll('[data-calendar]');
    calendars.forEach(item => {
      const options = getData(item, 'calendar');
      renderCalendar(item, options);
    });
  };

  const fullCalendar = {
    renderCalendar,
    fullCalendarInit
  };

  const { dayjs } = window;
  const currentDay = dayjs && dayjs().format('DD');
  const currentMonth = dayjs && dayjs().format('MM');
  const prevMonth = dayjs && dayjs().subtract(1, 'month').format('MM');
  const nextMonth = dayjs && dayjs().add(1, 'month').format('MM');
  const currentYear = dayjs && dayjs().format('YYYY');
  const events = [
    {
      title: 'Boot Camp',
      start: `${currentYear}-${currentMonth}-01`,
      end: `${currentYear}-${currentMonth}-03 16:00:00`,
      description:
        "Boston Harbor Now in partnership with the Friends of Christopher Columbus Park, the Wharf District Council and the City of Boston is proud to announce the New Year's Eve Midnight Harbor Fireworks! This beloved nearly 40-year old tradition is made possible by the generous support of local waterfront organizations and businesses and the support of the City of Boston and the Office of Mayor Marty Walsh.",
      className: 'text-success',
      location:
        'Boston Harborwalk, Christopher Columbus Park, <br /> Boston, MA 02109, United States',
      organizer: 'Boston Harbor Now'
    },
    {
      title: `Crain's New York Business `,
      start: `${currentYear}-${currentMonth}-11`,
      description:
        "Crain's 2020 Hall of Fame. Sponsored Content By Crain's Content Studio. Crain's Content Studio Presents: New Jersey: Perfect for Business. Crain's Business Forum: Letitia James, New York State Attorney General. Crain's NYC Summit: Examining racial disparities during the pandemic",
      className: 'text-primary'
    },
    {
      title: 'Conference',
      start: `${currentYear}-${currentMonth}-${currentDay}`,
      description:
        'The Milken Institute Global Conference gathered the best minds in the world to tackle some of its most stubborn challenges. It was a unique experience in which individuals with the power to enact change connected with experts who are reinventing health, technology, philanthropy, industry, and media.',
      className: 'text-success',
      schedules: [
        {
          title: 'Reporting',
          start: `${currentYear}-${currentMonth}-${currentDay} 11:00:00`,
          description:
            'Time to start the conference and will briefly describe all information about the event.  ',
          className: 'text-success '
        },
        {
          title: 'Lunch',
          start: `${currentYear}-${currentMonth}-${currentDay} 14:00:00`,
          description: 'Lunch facility for all the attendance in the conference.',
          className: 'text-info'
        },
        {
          title: 'Contest',
          start: `${currentYear}-${currentMonth}-${currentDay} 16:00:00`,
          description: 'The starting of the programming contest',
          className: 'text-success'
        },
        {
          title: 'Dinner',
          start: `${currentYear}-${currentMonth}-${currentDay} 22:00:00`,
          description: 'Dinner facility for all the attendance in the conference',
          className: 'text-success'
        }
      ]
    },
    {
      title: `ICT Expo ${currentYear} - Product Release`,
      start: `${currentYear}-${currentMonth}-16 10:00:00`,
      description: `ICT Expo ${currentYear} is the largest private-sector exposition aimed at showcasing IT and ITES products and services in Switzerland.`,
      end: `${currentYear}-${currentMonth}-18 16:00:00`,
      className: 'text-warning',
      allDay: true
    },
    {
      title: 'Meeting',
      start: `${currentYear}-${currentMonth}-07 10:00:00`,
      description:
        'Discuss about the upcoming projects in current year and assign all tasks to the individuals',
      className: 'text-info'
    },
    {
      title: 'Contest',
      start: `${currentYear}-${currentMonth}-14 10:00:00`,
      className: 'text-info',
      description:
        'PeaceX is an international peace and amity organisation that aims at casting a pall at the striking issues surmounting the development of peoples and is committed to impacting the lives of young people all over the world.'
    },
    {
      title: 'Event With Url',
      start: `${currentYear}-${currentMonth}-23`,
      description:
        'Sample example of a event with url. Click the event, will redirect to the given link.',
      className: 'text-success',
      url: 'http://google.com'
    },
    {
      title: 'Competition',
      start: `${currentYear}-${currentMonth}-26`,
      description:
        'The Future of Zambia – Top 30 Under 30 is an annual award, ranking scheme, and recognition platform for young Zambian achievers under the age of 30, who are building brands, creating jobs, changing the game, and transforming the country.',
      className: 'text-danger'
    },
    {
      title: 'Birthday Party',
      start: `${currentYear}-${nextMonth}-05`,
      description: 'Will celebrate birthday party with my friends and family',
      className: 'text-primary'
    },
    {
      title: 'Click for Google',
      url: 'http://google.com/',
      start: `${currentYear}-${prevMonth}-10`,
      description:
        'Applications are open for the New Media Writing Prize 2020. The New Media Writing Prize (NMWP) showcases exciting and inventive stories and poetry that integrate a variety of formats, platforms, and digital media.',
      className: 'text-primary'
    }
  ];

  /*-----------------------------------------------
  |   Calendar
  -----------------------------------------------*/
  const appCalendarInit = () => {
    const Selectors = {
      ACTIVE: '.active',
      CALENDAR: '#appCalendar',
      CALENDAR_TITLE: '.calendar-title',
      CALENDAR_DAY: '.calendar-day',
      CALENDAR_DATE: '.calendar-date',
      DATA_CALENDAR_VIEW: '[data-fc-view]',
      DATA_EVENT: 'data-event',
      DATA_VIEW_TITLE: '[data-view-title]',
      INPUT_TITLE: '[name="title"]'
    };

    const DataKeys = {
      EVENT: 'event',
      FC_VIEW: 'fc-view'
    };

    const eventList = events.reduce(
      (acc, val) =>
        val.schedules ? acc.concat(val.schedules.concat(val)) : acc.concat(val),
      []
    );

    const updateDay = day => {
      const days = [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ];
      return days[day];
    };

    const setCurrentDate = () => {
      const dateObj = new Date();
      const month = dateObj.toLocaleString('en-US', { month: 'short' });
      const date = dateObj.getDate(); // return date number
      const day = dateObj.getDay(); // return week day number
      const year = dateObj.getFullYear();
      const newdate = `${date}  ${month},  ${year}`;
      if (document.querySelector(Selectors.CALENDAR_DAY)) {
        document.querySelector(Selectors.CALENDAR_DAY).textContent =
          updateDay(day);
      }
      if (document.querySelector(Selectors.CALENDAR_DATE)) {
        document.querySelector(Selectors.CALENDAR_DATE).textContent = newdate;
      }
    };
    setCurrentDate();

    const updateTitle = currentData => {
      const { currentViewType } = currentData;
      if (currentViewType === 'timeGridWeek') {
        const weekStartsDate = currentData.dateProfile.currentRange.start;
        const weekEndDate = currentData.dateProfile.currentRange.end;

        // Formata as datas de início e fim da semana para português
        const startingDate = weekStartsDate.toLocaleDateString('pt-BR', { day: 'numeric', month: 'short' });
        const endingDate = weekEndDate.toLocaleDateString('pt-BR', { day: 'numeric', month: 'short' });

        // Atualiza o título do calendário
        document.querySelector(Selectors.CALENDAR_TITLE).textContent = `${startingDate} - ${endingDate}`;
      } else {
        document.querySelector(Selectors.CALENDAR_TITLE).textContent = currentData.viewTitle;
      }
    };

    const appCalendar = document.querySelector(Selectors.CALENDAR);

    if (appCalendar) {
      const calendar = fullCalendar.renderCalendar(appCalendar, {
        headerToolbar: false,
        dayMaxEvents: 3,
        height: 800,
        stickyHeaderDates: false,
        views: {
          week: {
            eventLimit: false // Remover limite de eventos para a visualização semanal
          }
        },
        events: eventList
      });

      updateTitle(calendar.currentData);

      document.addEventListener('click', e => {
        if (
          e.target.hasAttribute(Selectors.DATA_EVENT) ||
          e.target.parentNode.hasAttribute(Selectors.DATA_EVENT)
        ) {
          const el = e.target.hasAttribute(Selectors.DATA_EVENT)
            ? e.target
            : e.target.parentNode;
          const type = getData(el, DataKeys.EVENT);
          switch (type) {
            case 'prev':
              calendar.prev();
              updateTitle(calendar.currentData);
              break;
            case 'next':
              calendar.next();
              updateTitle(calendar.currentData);
              break;
            case 'today':
              calendar.today();
              updateTitle(calendar.currentData);
              break;
            default:
              calendar.today();
              updateTitle(calendar.currentData);
              break;
          }
        }

        if (e.target.hasAttribute('data-fc-view')) {
          const el = e.target;
          calendar.changeView(getData(el, DataKeys.FC_VIEW));
          updateTitle(calendar.currentData);
          document
            .querySelectorAll(Selectors.DATA_CALENDAR_VIEW)
            .forEach(item => {
              if (item === e.target) {
                item.classList.add('active-view');
              } else {
                item.classList.remove('active-view');
              }
            });
        }
      });
    }
  };

  const { docReady } = window.phoenix.utils;

  docReady(appCalendarInit);

}));
//# sourceMappingURL=calendar.js.map
