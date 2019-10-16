<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/contact1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .contact-section{
  background: url(images/contact.jpg) no-repeat center;
  background-size: cover;
  padding: 40px 0;
}
    </style>
  </head>
  <body>
<?php include 'header.php'; ?>
<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" method="POST" action="db_contact.php">
    <input type="text" class="contact-form-text" placeholder="Your name" name="name">
    <input type="email" class="contact-form-text" placeholder="Your email" name="gmail">
    <input type="text" class="contact-form-text" placeholder="Your phone" name="mobile">
    <textarea class="contact-form-text" placeholder="Your message" name="message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send">
  </form>
</div>
<?php include 'footer2.php'; ?>

  </body>
</html>
