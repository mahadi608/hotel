<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo Site</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="hero">
    <?php
    require 'header.php';
    ?>
    <div class="content">
      <h1>Welcome To Our Luxury Rooms</h1><br>
      <p class="par">Discover our world's #1 Luxury Room For VIP.</p>
      <a href="user/booking.php" class="btnn">Book Now</a>
    </div>
  </div>
  <section>
    <?php
    include 'feedback.php';
    ?>
  </section>
  <footer>
    <div class="footer">
    <p >Author: Mehedi Hasan<br>
      <a href="mailto:hege@example.com">admin@example.com</a>
    </p>
    </div>
  </footer>
</body>

</html>