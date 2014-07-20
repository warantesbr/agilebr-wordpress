
        <style>
            .sponsor-logo {
                float: left;
                margin-left: 20px;
                line-height: 150px;
            }
            .sponsor-log img {
                vertical-align: middle;
            }
            .row{
                display: inline-block;
            }
        </style>

        <h2>Patrocinadores</h2>

        <?php
            $categories = array(
                'diamond' => 'DIAMANTE',
                'gold' => 'OURO',
                'silver' => 'PRATA',
                'bronze' => 'Bronze',
                'community' => 'Community'
            );

            foreach($categories as $cat_key => $cat_value) :
                $args = array(
                    'post_type' => 'ab_sponsors',
                    'meta_key' => 'sponsors-category',
                    'meta_value' => $cat_value,
                    'posts_per_page' => 100
                );
                $sponsors = new WP_Query( $args ); ?>
        <div class="well well-lg text-center">
            <h3><?php echo $cat_value . " ({$cat_key})" ?></h3>
<?php           if ( $sponsors->have_posts() ) : ?>
            <div class="row">
<?php               while ( $sponsors->have_posts() ) : $sponsors->the_post();
                        $link_url = get_field('sponsors-link');
                        $image = get_field('sponsors-image'); ?>
                <div class="sponsor-logo">
                    <a href="<?php echo $link_url ?>" target="_blank">
                        <img alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" src="<?php echo $image['url'] ?>" />
                    </a>
                </div>
<?php               endwhile; ?>
            </div>
<?php           else : ?>
            <a class="btn btn-primary btn-lg" role="button" href="quero_patrocinar?cota=<?php echo $cat_key ?>">Seja o primeiro</a>
<?php           endif; ?>
        </div>
<?php       endforeach; ?>
