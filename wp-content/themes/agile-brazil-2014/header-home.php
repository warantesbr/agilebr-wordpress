<!-- News -->
<div class="news">
    <div class="widget-wrap">
        <h4 class="widget-title widgettitle">Notícias</h4>
        <?php $cat_id = 6; //the certain category ID
        $latest_cat_post = new WP_Query( array('posts_per_page' => 2, 'category__in' => array($cat_id)));
        if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();?>
            <div class="post-531 post type-post status-publish format-standard hentry category-noticias-pt tag-agile-brazil-2014 tag-apresentacoes tag-evento tag-florianopolis tag-metodos-ageis entry">
                <p class="byline post-info"><span class="date published time" title="2014-07-07T16:26:28+00:00"><?php echo the_date('d/m/Y');?></span></p>
                <h2><a title="<?php echo the_title();?>" href="<?php echo the_permalink();?>"><?php echo the_title();?></a></h2>
                <?php echo the_excerpt();?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<!-- /News -->
<div class="sidebar">
    <!-- Important dates -->
    <div class="important-dates">
        <h4>Datas Importantes</h4>
        <dl class="dl-horizontal"><dt>29/07</dt><dd>Fim da chamada para trabalhos</dd><dt>29/07</dt><dd>Fim da chamada para trabalhos</dd><dt>29/07</dt><dd>Fim da chamada para trabalhos</dd><dt>29/07</dt><dd>Fim da chamada para trabalhos</dd></dl></div>
    <!-- /Important dates -->
    <!-- Social links -->
    <div class="social-links">
        <h4>Compartilhe</h4>
        <p style="display: inline-flex;">
            <a target="_blank" href="https://twitter.com/agilebrazil" style="color: #333333;"><i class="fa fa-twitter-square"></i></a><br>
            <a target="_blank" href="https://www.facebook.com/AgileBrazil" style="color: #333333;"><i class="fa fa-facebook-square"></i></a><br>
            <a href="mailto:site@agilebrazil.com" style="color: #333333;"><i class="fa fa-envelope-square"></i></a>
        </p>
    </div>
    <!-- Social links -->
</div>
<!-- /Sidebar -->
</div>
</div>
<!-- SPONSORS AREA -->
<div id="sponsors">
    <div class="container">
        <?php
        $post = get_post(79);
        $content = apply_filters('the_content', $post->post_content);
        echo substr($content,strpos($content,'<style>'));
        ?>
    </div>
</div>