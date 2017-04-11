<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage eizisoft
 * @since eizisoft 1.0
 */
get_header();
?>

<div class="contact-us" id="scroll-to-top">
    <div class="container">
        <div class="ct-intro">
            <h5 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="3s">Contact</h5>
            <h2 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="3s">Always waiting to<br class="hidden-xs"> hear from you.</h2>
            <div class="aft-line"></div>
        </div>
        <div class="spacer-2"></div>
        <div class="col-sm-6">
            <div class="ct-section-1">
                <div class="ct-section-title">
                    <h2 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="3.5s">Have some coffee<br> with us at.</h2>
                    <i class ="ion-coffee"></i>
                </div>
                <div class="ct-section-content">
                    <p>
                        <span>Address:</span>
                        L-32, JVV Plaza,<br>
                        Noida, New Delhi,<br>
                        India.
                    </p>
                    <p>
                        <span>Tel:</span> +91-5665656, <br>
                        <span>Fax:</span> 45463242,<br>
                        <span>Mail:</span> contact@proton.agency
                    </p>
                </div>
            </div>
        </div>
        <div class="spacer-1 hidden-lg hidden-md hidden-sm"></div>
        <div class="col-sm-6">
            <form class="wow fadeIn" data-wow-duration="2s" data-wow-delay="3s" id="contact-form" method="post" action="" role="form">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required">
                        </div>
                        <div class="col-md-6">
                            <label for="form_phone">Phone</label>
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                        </div>
                        <div class="col-md-12">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-send" value="Send message">
                        </div>
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> Required.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="spacer-1"></div>
        <div class="col-sm-10 col-sm-offset-1">
          <div id="googleMap">
          </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/menu.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/validator.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/maplace.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/contact.js"></script>



<?php
//get_sidebar();
get_footer();
