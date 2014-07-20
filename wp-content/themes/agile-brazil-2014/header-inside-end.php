</div>
        <!-- Sidebar -->
        <div class="sidebar" style="float: right; width: 32%;">
          <div class="widget-wrap">
            <h4 class="widget-title widgettitle">Notícias</h4>
              <?php $cat_id = 6; //the certain category ID
              $latest_cat_post = new WP_Query( array('posts_per_page' => 5, 'category__in' => array($cat_id)));
              if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();?>
                  <div class="post-531 post type-post status-publish format-standard hentry category-noticias-pt tag-agile-brazil-2014 tag-apresentacoes tag-evento tag-florianopolis tag-metodos-ageis entry">
                      <p class="byline post-info">
                          <span class="date published time" title="2014-07-07T16:26:28+00:00"><?php echo the_date('d/m/Y');?></span>
                      </p>
                      <h2>
                          <a href="<?php echo the_permalink();?>" title="<?php echo the_title();?>"><?php echo the_title();?></a>
                      </h2>
                  </div>
              <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>