        <!-- FOOTER SECTION -->
        <footer>
          <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center margin-bottom">
                <h2>Keep in Touch</h2>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-silver.png" alt="divider">
                </div><!--  end col-sm-6 col-sm-offset-3 -->
            </div><!--  end row -->
            <div class="row">
              <div class="col-sm-4">
                <address>
                  Tranquil Spa<br>
                  Address Line 1<br>
                  Address Line 2<br>
                  Address Line 3<br>
                </address>
              </div><!--  end col-sm-4 -->
              <div class="col-sm-4">
                <ul>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="">Latest News</a></li>
                </ul>
              </div><!--  end col-sm-4 -->
              <div class="col-sm-4">
                <p>Follow Us</p>
                <i class="fa fa-facebook fa-lg"></i>
                <i class="fa fa-twitter fa-lg"></i>
                <i class="fa fa-google-plus fa-lg"></i>
                <i class="fa fa-pinterest fa-lg"></i>
                <i class="fa fa-youtube fa-lg"></i>
              </div><!--  end col-sm-4 -->
            </div><!--  end row -->
          </div><!--  end container -->

          <div class="container-fluid" id="copy">
            <div class="col-sm-12">
              <p>&copy; <?php echo date('Y'); ?> Tranquil Spa</p>
            </div><!--  end col-sm-12 -->
          </div><!--  end container-fluid -->
        </footer>

    <?php wp_footer(); ?>
    
  </body>
</html>