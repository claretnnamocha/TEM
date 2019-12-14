<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Team TEM" />
    <meta
      name="description"
      content="Event booking for events in Owerri Tech"
    />
    <title>OTEM</title>
    <link href="static/core/main.css" rel="stylesheet" />
    <link href="static/daygrid/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="static/css/main.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="app">
        <div class="date__banner">
          <div id="calendar"></div>
        </div>
        <div class="events-container">
          <h4 class="events-title">All events for selected date</h4>
          <ul class="events">
            <li class="event">
              <div class="event__date">14th December, 2019</div>
              <h3 class="event__name">Jack Event</h3>
              <h4 class="event__title">dignissimos excepturi?</h4>
              <p class="event__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos pariatur sed libero? Optio quia ipsam vitae nisi
                odit, provident cupiditate, consequuntur assumenda illo, nemo
                esse labore fugit reiciendis reprehenderit magni.
              </p>
            </li>
            <li class="event">
              <div class="event__date">14th December, 2019</div>
              <h3 class="event__name">Jack Event</h3>
              <h4 class="event__title">dignissimos excepturi?</h4>
              <p class="event__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos pariatur sed libero? Optio quia ipsam vitae nisi
                odit, provident cupiditate, consequuntur assumenda illo, nemo
                esse labore fugit reiciendis reprehenderit magni.
              </p>
            </li>
            <li class="event">
              <div class="event__date">14th December, 2019</div>
              <h3 class="event__name">Jack Event</h3>
              <h4 class="event__title">dignissimos excepturi?</h4>
              <p class="event__desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos pariatur sed libero? Optio quia ipsam vitae nisi
                odit, provident cupiditate, consequuntur assumenda illo, nemo
                esse labore fugit reiciendis reprehenderit magni.
              </p>
            </li>
          </ul>
          <div class="btn schedule__btn">
            <a href="add_event.php">Schedule an Event</a>
          </div>
        </div>
      </div>
    </div>

    <script src="static/core/main.js"></script>
    <script src="static/daygrid/main.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var calendarEl = document.getElementById("calendar");

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: ["dayGrid"]
        });

        calendar.render();
      });
    </script>
    <script src="static/js/main.js"></script>
  </body>
</html>
