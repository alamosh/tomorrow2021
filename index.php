<?php include('includes/siteroot.php');?>

<?php $pageTitle = "Welcome"; include('includes/layout/head.php');?>

	<!-- INTRO -->

  <section id="intro" class="container-fluid main-section bg-yellow">
  	<div class="row align-items-center">

      <div class="container">
        <div class="row align-items-center justify-content-between">

          <div class="col-10 col-md-5 col-lg-4">

            <p class="font-1-25">We are 100% digitally driven agency.</p>
            <p class="font-1-25">We don't forget that we believe in a physical world which is why we believe  it's essential to mix experimental + digital + content</p>
            <p class="font-1-25" id="typewriter-block"><b id="typewriter"></b></p>

            <div class="arrow arrow-right-down d-md-none"></div>
            <div class="arrow arrow-down-right d-none d-md-block"></div>

          </div>

          <div id="intro-slider">
            <div class="intro-slide">
              <img src="img/slider/slide-1.jpg" alt="Slide 1">
              <!-- <a href="#portfolio-1" class="btn btn-secondary">Workings Latam</a> -->
            </div>
            <div class="intro-slide">
              <img src="img/slider/slide-3.jpg" alt="Slide 3">
              <!-- <a href="#portfolio-3" class="btn btn-secondary">Workings Latam</a> -->
            </div>
            <div class="intro-slide">
              <img src="img/slider/slide-2.jpg" alt="Slide 2">
              <!-- <a href="#portfolio-2" class="btn btn-secondary">Workings Latam</a> -->
            </div>
            <div class="intro-slide">
              <img src="img/slider/slide-4.jpg" alt="Slide 4">
              <!-- <a href="#portfolio-3" class="btn btn-secondary">Workings Latam</a> -->
            </div>
            <div class="intro-slide">
              <img src="img/slider/slide-5.jpg" alt="Slide 5">
              <!-- <a href="#portfolio-3" class="btn btn-secondary">Workings Latam</a> -->
            </div>
            <div class="intro-slide">
              <img src="img/slider/slide-6.jpg" alt="Slide 6">
              <!-- <a href="#portfolio-3" class="btn btn-secondary">Workings Latam</a> -->
            </div>
          </div>

        </div>
      </div>

  	</div>

  </section>


  <!-- WORK -->

  <section id="work" class="container-fluid main-section bg-black">
    <div class="row">

      <div class="container">

        <!-- ==============================================
          Row 1
        =============================================== -->
        <div class="row align-items-center justify-content-center">

          <!-- Intro text -->
          <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-xl-1">
            <h2 class="font-3 font-display font-yellow">Big ideas.</h2>

            <p class="font-1-25 font-semi">We start with a great idea, then, we look into placement. Not the other way around.</p>

            <p class="font-1-25 font-semi">We believe that great content drives great results.</p>

            <p class="font-1-25 font-semi">If It serves a creative purpose, we can produce it through jingles, ads, animation, digital content, live streaming, VR, AR and probably stuff that doesn't exist yet.</p>

            <div class="arrow arrow-right-down d-md-none"></div>
            <div class="arrow arrow-down-right d-none d-md-block"></div>
          </div>

          <!-- McDonald's Russia -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "McDonald's";
          // Portfolio item description
          $portfolioItemDescription =  "Experience";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/mcdonalds-1_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/mcdonalds-1_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-mid";

          include('includes/blocks/portfolio-item.php'); ?>

        </div>
        <!-- ==============================================
          /Row 1
        =============================================== -->


        <!-- ==============================================
          Row 2
        =============================================== -->
        <div class="row align-items-start justify-content-center">

          <!-- Nike Air Burger -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "Nike";
          // Portfolio item description
          $portfolioItemDescription =  "Experience";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/nike-1_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/nike-1_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-large";

          include('includes/blocks/portfolio-item.php'); ?>

          <!-- Banistmo -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "Banistmo";
          // Portfolio item description
          $portfolioItemDescription =  "Experience";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/banistmo-1_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/banistmo-1_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-small";

          include('includes/blocks/portfolio-item.php'); ?>

        </div>
        <!-- ==============================================
          /Row 2
        =============================================== -->


        <!-- ==============================================
          Row 3
        =============================================== -->
        <div class="row align-items-start justify-content-center">

          <!-- Titan -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "Titan";
          // Portfolio item description
          $portfolioItemDescription =  "Creativity and campaigns";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/titan-1_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/titan-1_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-mid";

          include('includes/blocks/portfolio-item.php'); ?>

          <!-- Digicel 1 -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "Digicel";
          // Portfolio item description
          $portfolioItemDescription =  "Digital content and performance";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/digicel-1_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/digicel-1_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-large";

          include('includes/blocks/portfolio-item.php'); ?>

        </div>
        <!-- ==============================================
          /Row 3
        =============================================== -->


        <!-- ==============================================
          Row 4
        =============================================== -->
        <div class="row align-items-start justify-content-center">

          <!-- ADAP -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "ADAP";
          // Portfolio item description
          $portfolioItemDescription =  "Creativity, campaigns and performance";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/adap-1_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/adap-1_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-mid";

          include('includes/blocks/portfolio-item.php'); ?>

          <!-- McDonald's Carritos -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "McDonald's";
          // Portfolio item description
          $portfolioItemDescription =  "Experience";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/mcdonalds-2_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/mcdonalds-2_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-mid";

          include('includes/blocks/portfolio-item.php'); ?>

        </div>
        <!-- ==============================================
          /Row 4
        =============================================== -->


        <!-- ==============================================
          Row 5
        =============================================== -->
        <div class="row align-items-start justify-content-center">

          <!-- Banistmo -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "Banistmo";
          // Portfolio item description
          $portfolioItemDescription =  "Creativity and campaigns";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/banistmo-2_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/banistmo-2_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-large";

          include('includes/blocks/portfolio-item.php'); ?>

          <!-- Titan Toys -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "Titan Toys";
          // Portfolio item description
          $portfolioItemDescription =  "Creativity and campaigns";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/titan-toys_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/titan-toys_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-small";

          include('includes/blocks/portfolio-item.php'); ?>

        </div>
        <!-- ==============================================
          /Row 5
        =============================================== -->


        <!-- ==============================================
          Row 6
        =============================================== -->
        <div class="row align-items-start justify-content-center">

          <!-- Digicel -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "Digicel";
          // Portfolio item description
          $portfolioItemDescription =  "Digital content and performance";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/digicel-2_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/digicel-2_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-small";

          include('includes/blocks/portfolio-item.php'); ?>

          <!-- ADAP -->
          <?php
          // Video or image portfolio item. Options: img | vid
          $portfolioItemMediaType =  "vid";
          // Portfolio item title
          $portfolioItemTitle =  "ADAP";
          // Portfolio item description
          $portfolioItemDescription =  "Creativity, campaigns and performance";
          // Path to small preview video or image
          $portfolioItemThumbnail =  "https://panamamotorshow.com.pa/pub/media/vid/adap-2_thumb.mp4";
          // Path to full size video
          $portfolioItemFull =  "https://panamamotorshow.com.pa/pub/media/vid/adap-2_full.mp4";
          // Item size in grid. Options: rect-tall | rect-wide | square-small | square-large | vid-small | vid-mid | vid-large
          $portfolioItemSize =  "vid-large";

          include('includes/blocks/portfolio-item.php'); ?>

        </div>
        <!-- ==============================================
          /Row 6
        =============================================== -->

        <div id="client-logos" class="row py-4 mt-5 text-uppercase">

          <div class="col-12 font-display text-center">

            <h3>Brands that trust us</h3>

            <div class="row align-items-center justify-content-center">

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#mcdonalds"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#workings"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#banistmo"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#u-del-istmo"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#multiplaza"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#digicel"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#nequi"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#titan"></use>
                </svg>

              </div>

              <div class="col-4 col-md-3 col-xl-2">

                <svg viewBox="0 0 235 62" class="icon">
                  <use xlink:href="#nike"></use>
                </svg>

              </div>

            </div>

          </div>

          <div class="col-12">

          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- TEAM/SPACE -->

  <section id="team" class="container-fluid main-section bg-red">
    <div class="row">

      <div class="container">

        <!-- Team intro text -->
        <div class="row align-items-center justify-content-center" id="team-row">

          <div class="col-11 col-md-5">

            <h2 class="font-3 font-black font-display">Teamwork:</h2>
            <h4>Young, bold and fresh!</h4>
            <p class="font-semi">We are mainly composed of ´viejenials´ (old millennials), we understand older and younger generations and we sure know how to reach them both . We also value new talent, because they are the voice of the new consumer that is guiding decisions today.</p>
            <div class="d-md-none arrow arrow-right-down"></div>
            <div class="d-none d-md-block arrow arrow-down-right"></div>

          </div>

          <!-- Team Video -->

          <div class="col-9 col-md-4 col-xl-5 text-center">
            <video class="round-corners" autoplay muted loop>
              <source src="https://panamamotorshow.com.pa/pub/media/vid/team.mp4" type="video/mp4">
            </video>
          </div>

          <!-- /Team Video -->

        </div>
        <!-- /Team intro text -->

        <!-- Team slider -->
        <!-- <div class="row">
          <div id="team-slider-1" class="team-slider col-12">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
          </div>
          <div id="team-slider-2" class="team-slider col-12 ring-white">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
            <img src="img/filler/team-2.jpg" alt="Team">
            <img src="img/filler/team-1.jpg" alt="Team">
          </div>
        </div> -->
        <!-- /Team slider -->

        <div class="row d-none align-items-center justify-content-center mt-5">

          <!-- Space intro text -->
          <div class="col-11 col-md-5 col-xl-3 font-display">
            <h2 class="font-3 font-black">Our space:</h2>

            <div class="row align-items-center">

              <div class="col-8 col-md-12">
                <p class="font-semi">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-4 col-md-12">
                <div class="arrow arrow-right-down d-md-none"></div>
                <div class="arrow arrow-down-right d-none d-md-block mt-md-0"></div>
              </div>

            </div>
          </div>
          <!-- /Space intro text -->

          <!-- Space slider -->
          <div id="space-slider" class="col-12 col-md-6 offset-xl-1 ring-white">
            <img src="img/filler/space-1.jpg" alt="Space">
            <img src="img/filler/space-2.jpg" alt="Space">
          </div>
          <!-- /Space slider -->

        </div>

      </div>

    </div>

  </section>


  <!-- CONTACT -->

  <section id="contact" class="container-fluid main-section bg-blue">
    <div class="row">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          <!-- Intro text -->
          <div class="col-11 col-md-5 col-xl-3">
            <h2 class="font-display font-3 font-yellow">Get in touch:</h2>
            <p class="font-semi">This could be the start of something amazing.</p>

            <!-- Address info -->
            <div class="row align-items-center">
              <div class="col-4 col-xl-3">
                <i class="far fa-building font-3 font-yellow"></i>
              </div>
              <div class="col-8 col-xl-9 font-semi">
                <p>Avenida Samuel Lewis<br>
                Edificio Plaza 54, Piso 1<br>
                Panamá City</p>
              </div>
            </div>
          </div>
          <!-- /Intro text -->

          <!-- Contact form -->
          <div class="col-12 col-md-6 offset-xl-1">
            <div id="contact-form-wrapper">

              <!-- Main form -->
              <form id="contact-form" action="https://formspree.io/f/xrqqkjrm" method="POST">
                <!-- From -->
                <div class="d-flex">
                  <label class="form-label-left" for="#contact-form-name">From</label>
                  <div class="w-100">
                    <input name="name" id="contact-form-name" type="text" placeholder="Name" class="form-control" required>
                    <input name="email" id="contact-form-email" type="email" placeholder="Email" class="form-control" required>
                    <input type="hidden" name="_cc" value="gloria@tomorrow-digital.com,simon@tomorrow-digital.com" />
                  </div>
                </div>
                <hr>

                <!-- To -->
                <div class="d-flex">
                  <label class="form-label-left">To</label>
                  <p class="w-100">info@tomorrow-digital.com</p>
                </div>
                <hr>

                <!-- Subject -->
                <input name="subject" id="contact-form-subject" type="text" placeholder="Subject" class="form-control">
                <hr>

                <!-- Message -->
                <textarea name="message" id="contact-form-message" class="form-control" placeholder="Please type your message here."></textarea>

                <!-- Contact info -->
                <div class="d-flex">
                  <label class="form-label-auto" for="#contact-form-company">I work with:</label>
                  <input name="company" id="contact-form-company" type="text" placeholder="Company Name" class="form-control">
                </div>
                <div class="d-flex">
                  <label class="form-label-auto" for="#contact-form-phone">You can call me at:</label>
                  <input name="phone" id="contact-form-phone" type="text" placeholder="6123-4567" class="form-control" required>
                </div>

                <!-- Bottom buttons -->
                <div class="d-flex align-items-center justify-content-between mt-3">
                  <div id="contact-form-icons">
                    <i class="fas fa-paperclip"></i>
                    <i class="fas fa-image"></i>
                    <i class="fas fa-smile-wink"></i>
                    <i class="fas fa-link"></i>
                  </div>
                  <button class="btn" id="contact-send-btn">
                    <div id="contact-send-bg"></div>
                    <i class="fas fa-paper-plane"></i>
                    <span id="paper-plane-bye">BYE!</span>
                  </button>
                </div>
              </form>

              <!-- Success message -->
              <div id="contact-form-success" class="align-items-center justify-content-center">
                <i class="fas fa-thumbs-up"></i>
                <div>
                  <h2>We'll be in touch</h2>
                  <h4>Your message was sent successfully.</h4>
                </div>
              </div>

            </div>

          </div>
          <!-- /Contact form -->

        </div>
      </div>

    </div>

  </section>


<?php include('includes/layout/work-popup.php');?>

<?php include('includes/layout/foot.php');?>
