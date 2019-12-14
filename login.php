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
        <h4 class="form__title">Login Here</h4>
        <form action="#" method="post">
          <div class="form__group">
            <label
              >Email
              <input
                type="text"
                name="email"
                id="email"
                placeholder="Enter Email"
              />
            </label>
          </div>
          <div class="form__group">
            <label
              >Password
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Enter Password"
              />
            </label>
          </div>
          <div class="form__group btn__login">
            <button type="submit" class="btn">Login</button>
          </div>
          <div class="form__group btn__login">
            <span
              >Not yet registered?
              <a href="./registeration.php" class="form__link">Register</a></span
            >
          </div>
        </form>
      </div>
    </div>
    <script src="static/js/main.js"></script>
  </body>
</html>
