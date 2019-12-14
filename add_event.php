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
    <link rel="stylesheet" href="static/css/main.css" />
  </head>
  <body>
    <div class="form-wrapper">
      <div class="form">
        <h4 class="form__title">Add Event Here</h4>
        <form action="#" method="post">
          <div class="form__group">
            <label
              >Event Name
              <input
                type="text"
                name="event_name"
                id="event_name"
                placeholder="Event name"
              />
            </label>
          </div>
          <div class="form__group">
            <label
              >Event title
              <input
                type="text"
                name="event_title"
                id="event_title"
                placeholder="Event title"
              />
            </label>
          </div>
          <div class="form__group">
            <label
              >Event description
              <input
                type="text"
                name="event_description"
                id="event_description"
                placeholder="Event description"
              />
            </label>
          </div>
          <div class="form__group">
            <label
              >Event location
              <input
                type="text"
                name="event_location"
                id="event_location"
                placeholder="Event location"
              />
            </label>
          </div>
          <div class="form__group">
            <label
              >Event city
              <input
                type="text"
                name="event_city"
                id="event_city"
                placeholder="Event city"
              />
            </label>
          </div>
          <div class="form__group">
            <label
              >Event date
              <input
                type="date"
                name="event_date"
                id="event_date"
                placeholder="Event date"
              />
            </label>
          </div>
          <div class="form__group btn__login">
            <button type="submit" class="btn">Schedule</button>
          </div>
        </form>
      </div>
    </div>
    <script src="static/js/main.js"></script>
  </body>
</html>
