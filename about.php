<?php
include 'config.php';
session_start();

$user_id=$_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">

</head>
<body>
  
<?php
include 'user_header.php';
?>
<section class="about_cont">
    <img src="sabout2.jpg" alt="">
    <div class="about_descript">
      <h2>Why Choose Us ?</h2>
      <p>At the heart of Coralia lies our commitment to using only the purest, sustainably sourced ingredients. Each product is thoughtfully crafted to harness the nourishing properties of marine botanicals and natural extracts. We believe that what you put on your skin should be as clean and wholesome as what you put in your body.
Our formulations are free from harmful chemicals, artificial fragrances, and unnecessary additives. Instead, we focus on blending the best of nature to create effective skincare solutions that enhance your skin’s natural beauty.Coralia is not just a skincare brand; it's a promise to help you achieve timeless beauty. Our products are designed for all skin types, ensuring that everyone can experience the radiant glow that comes from healthy, well-nourished skin. With every application, you’ll feel the ocean’s embrace, reminding you of the beauty that lies within and around you.
    </p>
    </div>
  </section>

  <section class="questions_cont">
    <div class="questions">
    <h2>Have Any Queries?</h2>
    <p>Contact Us through Email or Social Media !</p>
    </div>
  </section>

<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>