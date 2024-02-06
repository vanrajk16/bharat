<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/regs.css');?>" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<title>Krishi Bharat</title>
  </head>
  <body>
    <div class="header">
      <div class="logo">
        <img src="<?php echo base_url('assets/Images/logo_with_name.png'); ?>" alt="Logo" />
      </div>
      <div class="dropdown">
        <span>Languages: </span>
        <select name="Languages" id="lang__selector">
          <option value="1" selected="">English</option>
          <option value="2">हिंदी</option>
          <option value="3">ગુજરાતી</option>
          <option value="4">मराठी</option>
          <option value="5">తెలుగు</option>
          <option value="6">বাঙালি</option>
          <option value="7">தமிழ்</option>
        </select>
      </div>
    </div>

    <div class="nav">
      <nav class="navbar">
        <ul>
          <li>
            <a href="<?php echo base_url('/');?>" class="home__btn nav__link"
              ><img src="<?php echo base_url('assets/svg/home1.svg');?>" alt="Home"
            /></a>
          </li>
          <li><a href="#features" class="nav__link">Features</a></li>
          <li><a href="#about__kb" class="nav__link">About Krishi Bharat</a></li>
          <li><a href="#contact__us" class="nav__link">Contact Us</a></li>
          <li><a href="#about_us" class="nav__link">About Us</a></li>
        </ul>
        <button class="register" style="background-image: url(<?php echo base_url('assets/Images/button 5.jpg');?>)">
          <a href="<?php echo base_url('/registrition');?>"
            >Register<img src="<?php echo base_url('assets/svg/Forward Button.svg');?>" alt="Forward Button"
          /></a>
        </button>
      </nav>
    </div>