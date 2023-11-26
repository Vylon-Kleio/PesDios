<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>PesDios DashBoard</title>

    <script type="text/javascript" >
      $(document).ready(function(){
        setInterval(function(){
          $('#moisture-sensor').load('moisture_sensor.php')
          $('#pest-sensor').load('pest_sensor.php')
        }, 1000);
      });
    </script>
  </head>
  <body>
    <nav>
      <div class="logo-name">
        <span class="logo_name">PesDios</span>
      </div>

      <div class="menu-items">
        <ul class="nav-links">
          <li>
            <a href="#">
              <i class="uil uil-estate"></i>
              <span class="link-name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-bug"></i>
              <span class="link-name">Pest Panel</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="uil uil-tear"></i>
              <span class="link-name">Moisture Panel</span>
            </a>
          </li>
        </ul>

        <ul class="logout-mode">
          <li>
            <a href="../index.html">
              <i class="uil uil-signout"></i>
              <span class="link-name">Logout</span>
            </a>
          </li>

          <li class="mode">
            <a href="#">
              <i class="uil uil-moon"></i>
              <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
      <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>

        <div class="search-box">
          <i class="uil uil-search"></i>
          <input type="text" placeholder="Search here..." />
        </div>
      </div>

      <div class="dash-content">
        <div class="overview">
          <div class="title">
            <i class="uil uil-tachometer-fast-alt"></i>
            <span class="text">Dashboard</span>
          </div>

          <div class="boxes">
            <div class="box box1">
              <i class="uil uil-tear"></i>
              <span class="text">Moisture Level</span>
              <span class="number" id="moisture-sensor" ></span>
            </div>

            <div class="box box2">
              <i class="uil uil-bug"></i>
              <span class="text">Pest Monitor</span>
              <span class="number" id="pest-sensor" ></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="script.js"></script>
  </body>
</html>
