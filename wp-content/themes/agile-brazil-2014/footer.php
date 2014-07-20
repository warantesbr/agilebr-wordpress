<div id="footer">
    <div class="container">
        <div class="col-md-2">
            <h3>Navegue</h3>
            <ul class="nav">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '%3$s', 'container' => '')); ?>
            </ul>
        </div>
        <div class="col-md-2">
            <h3>Agile Alliance</h3>
            <ul class="nav">
                <li><a href="#">Agile Alliance Home</a></li>
                <li><a href="#">The Alliance</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Membership</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Twitter</h3>
            <a height="300" class="twitter-timeline"  href="https://twitter.com/agilebrazil"  data-widget-id="488550638179983360">Tweets by @agilebrazil</a>
        </div>
        <div class="col-md-4">
            <h3>Photostream</h3>
            <iframe src="https://www.flickr.com/photos/38855767@N07/13404766123/player/5dc831774f" width="100%"  frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        </div>
    </div>
    <div class="copyright">
        <p class="text-center">Agile Brazil 2014 @ Todos os Direitos</p>
    </div>
</div> <!-- /FOOTER -->

<!-- Bootstrap core JavaScript
================================================== -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/bootstrap/transition.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascripts/bootstrap/collapse.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</body>
</html>
