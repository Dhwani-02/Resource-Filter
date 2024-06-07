<?php
/*
Template Name: Archive Resource Page
*/
get_header();
?>

<div style="max-width: 1200px; margin: 0 auto; padding: 20px;">
    <?php
    // Get filter values from the request
    $resource_type = isset($_GET['resource_type']) ? $_GET['resource_type'] : '';
    $resource_topic = isset($_GET['resource_topic']) ? $_GET['resource_topic'] : '';
    ?>

    <h1 style="text-align: center; margin-bottom: 30px;">All Resources</h1>

    <form method="GET" action="" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <div style="flex: 1; margin-right: 10px;">
            <label for="resource_type" style="display: block; margin-bottom: 5px;">Resource Type:</label>
            <select name="resource_type" id="resource_type" style="width: 100%; padding: 8px;">
                <option value="">All Types</option>
                <?php
                $types = get_terms(array(
                    'taxonomy' => 'resource_type',
                    'hide_empty' => false,
                ));
                foreach ($types as $type) {
                    echo '<option value="' . $type->slug . '" ' . selected($resource_type, $type->slug, false) . '>' . $type->name . '</option>';
                }
                ?>
            </select>
        </div>

        <div style="flex: 1; margin-right: 10px;">
            <label for="resource_topic" style="display: block; margin-bottom: 5px;">Resource Topic:</label>
            <select name="resource_topic" id="resource_topic" style="width: 100%; padding: 8px;">
                <option value="">All Topics</option>
                <?php
                $topics = get_terms(array(
                    'taxonomy' => 'resource_topic',
                    'hide_empty' => false,
                ));
                foreach ($topics as $topic) {
                    echo '<option value="' . $topic->slug . '" ' . selected($resource_topic, $topic->slug, false) . '>' . $topic->name . '</option>';
                }
                ?>
            </select>
        </div>

        <div style="flex: 0 0 auto;">
            <input type="submit" value="Filter" style="padding: 10px 20px; background-color: #0073aa; color: #fff; border: none; cursor: pointer;">
        </div>
    </form>

    <?php
    $args = array(
        'post_type' => 'resource',
        'posts_per_page' => -1,
        'tax_query' => array(
            'relation' => 'AND',
        ),
    );

    if ($resource_type) {
        $args['tax_query'][] = array(
            'taxonomy' => 'resource_type',
            'field' => 'slug',
            'terms' => $resource_type,
        );
    }

    if ($resource_topic) {
        $args['tax_query'][] = array(
            'taxonomy' => 'resource_topic',
            'field' => 'slug',
            'terms' => $resource_topic,
        );
    }

    $resources = new WP_Query($args);

    if ($resources->have_posts()) : ?>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <?php while ($resources->have_posts()) : $resources->the_post(); ?>
                <div style="flex: 1 1 calc(33.333% - 20px); box-sizing: border-box; padding: 20px; border: 1px solid #e0e0e0; border-radius: 4px; background: #fff;">
                    <h4 style="margin-top: 0;"><a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #0073aa;"><?php the_title(); ?></a></h4>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail" style="margin-bottom: 15px;">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail', array('style' => 'max-width: 100%; height: auto; display: block; margin: 0 auto;')); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata();
    else :
        echo '<p>No resources found.</p>';
    endif;
    ?>
</div>

<?php
get_footer();
?>
