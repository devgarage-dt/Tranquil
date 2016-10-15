<?php get_header(); ?>

      <!-- WELCOME SECTION -->
      <section id="welcome">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2>Welcome to Tranquil Spa</h2>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider">
            </div><!--  end col-sm-6 col-sm-offset-3 -->
          </div><!--  end row -->

          <div class="row facilities">
            <div class="col-sm-3">
              <a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/makeup.png" alt="Hair and Make Up">Hair &amp; Make Up</a> 
            </div><!--  end col-sm-3 -->
            <div class="col-sm-3">
              <a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/candles.png" alt="Spa Facilities">Spa Facilities</a> 
            </div><!--  end col-sm-3 -->
            <div class="col-sm-3">
              <a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/lake.png" alt="Lakeside Retreat">Lakeside Retreat</a> 
            </div><!--  end col-sm-3 -->
            <div class="col-sm-3">
              <a href=""><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pool.png" alt="All Our Facilities">All Our Facilities</a> 
            </div><!--  end col-sm-3 -->
            </div><!--  end row facilities -->
          </div><!--  end container -->
        </section>

        <!-- LATEST OFFERS SECTION -->
        <section id="latest-offers">
          <div class="container">
            <div class="row margin-bottom">
              <div class="col-sm-6 col-sm-offset-3">
                <h2>Latest Offers</h2>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider">
              </div><!--  end col-sm-6 col-sm-offset-3 -->
            </div><!--  end row -->

            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="offer">
                      <span>$60</span>
                      <h3>FAMILY <br>OFFER</h3>
                      <p>Family Pool</p>
                      <p>Great Day Out</p>
                    </div><!--  end offer -->
                  </div><!--  end col-sm-4 -->
                  <div class="col-sm-4">
                    <div class="offer">
                      <span>$120</span>
                      <h3>FOR THE <br>BRIDE</h3>
                      <p>Hair &amp; Make Up</p>
                      <p>Full Pamper Package</p>
                    </div><!--  end offer -->
                  </div><!--  end col-sm-4 -->
                  <div class="col-sm-4">
                    <div class="offer">
                      <span>$90</span>
                      <h3>WEEKEND <br>PASS</h3>
                      <p>Modern Facilities</p>
                      <p>Perfect Gift</p>
                    </div><!--  end offer -->
                  </div><!--  end col-sm-4 -->
                </div><!--  end row -->
              </div><!--  end col-sm-12 -->
            </div><!--  end row -->

          </div><!--  end container -->
        </section>

        <!-- SHOP ONLINE SECTION -->
        <section id="shop-online">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 text-center">
                <h2>Shop Online</h2>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider"><br>
                <a href="" class="btn btn-default" role="button">Shop Here</a>
              </div><!--  end col-sm-6 col-sm-offset-3 -->
            </div><!--  end row -->
          </div><!--  end container -->
        </section>

<?php get_footer(); ?>