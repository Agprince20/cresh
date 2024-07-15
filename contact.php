<?php
include_once("asset/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact/stylec.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Contact Page -->
<div class="container">
  <h1>Contact Us</h1>
  <p>Get in touch with us using the form below or by visiting our school.</p>

  <!-- Contact Form -->
  <form id="contact-form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone">
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit">Send Message</button>
  </form>

  <!-- Contact Information -->
  <h2>Our Contact Information</h2>
  <ul>
    <li><i class="fa fa-envelope"></i> <a href="mailto:info@schoolwebsite.com">info@schoolwebsite.com</a></li>
    <li><i class="fa fa-phone"></i> <a href="tel:555-555-5555">555-555-5555</a></li>
    <li><i class="fa fa-map-marker"></i> 123 School Street, Anytown, USA 12345</li>
  </ul>

  <!-- Map -->
  <h2>Our Location</h2>
  <div id="map"></div>

  <!-- Social Media Links -->
  <h2>Stay Connected</h2>
  <ul>
    <li><a href="https://www.facebook.com/schoolwebsite"><i class="fa fa-facebook"></i> Facebook</a></li>
    <li><a href="https://www.twitter.com/schoolwebsite"><i class="fa fa-twitter"></i> Twitter</a></li>
    <li><a href="https://www.instagram.com/schoolwebsite"><i class="fa fa-instagram"></i> Instagram</a></li>
  </ul>
</div>
</body>
</html>
<?php
include_once('asset/footer.php');
?>