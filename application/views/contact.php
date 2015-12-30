<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="contact">
   <div class="page">
      <h1>CONTACT US</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.2492200693036!2d-79.39836059999999!3d43.70536959999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b333c8972d33d%3A0xf1d69ab75562f742!2s2190+Yonge+St%2C+Toronto%2C+ON+M4S+2B8%2C+Canada!5e0!3m2!1sen!2sru!4v1438970552366" class="contact_map" frameborder="0" ></iframe>
      <div class="contact_mails"><i class="fa fa-envelope-o"></i>contact@vicyork.com</div>
      <div class="phone"><i class="fa fa-phone"></i> T (416) 488 1675</div>
      <div class="fax"><i class="fa fa-fax"></i> F (416) 488 3452</div>
      <form id="contact-form" class="form" action="#" method="POST" role="form">
         <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
         </div>
         <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
         </div>
         <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
         </div>
         <div class="form-group">
            <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message" tabindex="4" required></textarea>                
         </div>
         <div class="form-group">
            <button type="submit" class="action-button shadow animate yellow">SEND MESSAGE</button>
         </div>
      </form>
   </div>
   <!--page-->
   </div>
<!--contact-->