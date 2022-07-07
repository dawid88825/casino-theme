<?php
/* Template Name: Casino Template */
get_header();
?>

<!-- Hero Section -->
<div class="section">
  <div class="container">
    <div class="hero">
      <h1>Best <span style="color: var(--third-color)">Online Casino</span> Guide</h1>
      <p>
        Welcome to Casino World - Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Quisque fermentum pharetra urna non faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      </p>
    </div>
  </div>
</div>

<!-- Cards Section -->
<div class="section">
  <div class="container">
    <div class="casino-cards">
      <?php for ($i = 0; $i < 3; $i++) { ?>
        <div class="card<?php echo $i === 0 ? ' card-main' : ''; ?>">
          <div class="card-top">
            <img class="casino-logo" src="<?php echo get_template_directory_uri();?>/assets/pp-logo.png" alt="#">
            <div class="casino-info">
              <div class="casino-name">
                Paddypower Casino
              </div>
              <div class="casino-licence">L1160657W000330</div>
            </div>
            <div class="casino-rating">
              <svg class="star" viewBox="0 0 10.717 9.665"><path d="m183.528 212.324a.36.36 0 0 0 -.3-.235l-3.255-.449-1.46-2.789a.373.373 0 0 0 -.487-.16.352.352 0 0 0 -.169.16l-1.46 2.789-3.255.449a.35.35 0 0 0 -.313.389.343.343 0 0 0 .108.2l2.357 2.172-.547 3.069a.348.348 0 0 0 .3.393.384.384 0 0 0 .217-.031l2.919-1.447 2.919 1.447a.375.375 0 0 0 .492-.146.331.331 0 0 0 .037-.217l-.555-3.069 2.357-2.172a.332.332 0 0 0 .095-.353z" fill="#f28b4f" transform="translate(-172.831 -208.656)"/></svg>
              4.9
            </div>
          </div>
          <div class="card-mid">
            <div class="card-mid-text">
              <p>100% up to<br><strong>&#163;500</strong></p>
              <?php if ($i === 0) { ?>
                <div class="great-offer">
                  <img class="great-offer-img" src="<?php echo get_template_directory_uri();?>/assets/GreatOffer.svg" alt="#">
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="card-bottom">
            <div class="terms">
              T&amp;C<br>
              <div class="terms-content">Lorem ipsum dolor sit amet, consectetur.</div>
            </div>
            <div class="card-links">
              <a class="button button--bonus" href="#">Activeaza Bonusul</a>
              <a class="read-review" href="#">Read Review</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php
get_footer();