<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Torque Confirmation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/style.css"/ >
    <script src="js/main.js"></script>
  </head>
  <body>
    <?php
        DEFINE('DB_HOST', 'localhost');
        DEFINE('DB_USERNAME', 'root');
        DEFINE('DB_PASSWORD', 'root');
        DEFINE('DB_DATABASE', 'app');

        $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        if (mysqli_connect_error()) {
          die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
        } ?>
    <header>
      <div class="logo">
        <a href="https://www.toyota.com/"><h1><img src="logo/toy-logo.png" alt="Toyota Logo" ></a>Torque Confirmation</h1>
      </div>
    </header>
    <div class="container">

      <div class="main">

          <form action="index.php" method="post">

            <select id="car">
                <option value="Choose Model">Choose Model</option>
                <option value="Hilux">Hilux</option>
                <option value="LC15">LC15</option>
                <option value="RAV4">RAV4</option>
                <option value="PRAC">PRAC</option>
            </select>

            <select class="model" id="Hilux">
                 <option value="1">Aluminium Bedliner</option>
                 <option value="2">Plast Bedliner</option>
                 <option value="3">Sidesteps</option>
                 <option value="4">Hilux N1</option>
            </select>

            <select class="model" id="LC15">
                 <option value="1">N1 Airbag LC</option>
                 <option value="2">WJ</option>
            </select>

            <select class="model" id="RAV4">
                 <option value="1">N1 RAV4</option>
                 <option value="2">WJ</option>
            </select>

            <select class="model" id="PRAC">
                 <option value="1">Towing PRAC</option>
                 <option value="2">WJ</option>
            </select>


            <select class="inspector">
                <option value="1">Select Inspector</option>
                <option value="2">Ali Husseini</option>
                <option value="3">Nazeef</option>
                <option value="4">Basel</option>
              </select>

              <select class="operator">
                  <option value="1">Select Operator</option>
                  <option value="2">Ali K</option>
                  <option value="3">Amir Doric</option>
                  <option value="4">Jimmy</option>
                  <option value="5">Coung</option>
                  <option value="6">Tanh</option>
                  <option value="7">Roberto</option>
                  <option value="8">Bassel</option>
                  <option value="9">Zeylko</option>
                  <option value="10">Milutin</option>
                  <option value="11">Fabio</option>
                  <option value="12">Zemov</option>
                  <option value="13">Robin</option>
              </select>

            <input class="vin" type="text" placeholder="Enter VIN nummer here!"  />
        </div>
      </form>
    <div class="table">

   </div>

  </div>
  <button class="main-btn">SAVE</button>

  </body>
</html>
