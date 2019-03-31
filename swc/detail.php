<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Field Booking/details</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <style>
    label{
      font-weight: bold;
    }

  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <a class="navbar-brand" href="#">IIT Guwahati</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <!-- Anything inside of collapse navbar-collapse goes into the "hamburger" -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="navbar-nav">

          <!-- the span class "sr-only" tells screen readers that Home is the active link, for accessibility -->
          <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="calender.html">Calender</a>
          <a class="nav-item nav-link active" href="check_status.html">Check Status</a>
          <a class="nav-item nav-link active" href="contacts.html">Contacts</a>

        </div> <!-- /.navbar-nav, left-hand content -->

        <!-- STUFF ON THE RIGHT -->
        <div class="navbar-nav ml-auto">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown-menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sign In
              </a>
              <div class="dropdown-menu" aria-labelledby="navbar-dropdown-menu">
                <a class="dropdown-item" href="apeo.php">APEOs</a>
                <a class="dropdown-item" href="#">Gensec</a>
                <a class="dropdown-item" href="#">Chairman</a>
              </div>
            </div>
          </div> <!-- /.navbar-nav, right-hand content -->
        </div>
      </div> <!-- /.navbar-collapse -->
    </nav>

    <div class="container">
      <div class="jumbotron">
        <h1>Please read the instructions carefully</h1>
        <ol>
          <li>The student must fills in his details, the purpose for booking and the time slot for which he
            wants to book the field.</li>
          <li>The slot timing to book a ground will start from 6 AM to 9 AM and 5 PM to 10 PM every
            day. Each slot should be of half an hour. A student can request multiple slots in a single request.
          </li>
          <li>Students must see which slots are free and which are booked. And fill the details accordingly.</li>
          <li>For Multiple slots, book the form multiple number of times.</li>
        </ol>
      </div>
    </div>
    <!-- Need to have JQuery and Javascript for DropDown Actions to work -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
  </html>
