    <?php get_header(); ?>
    <!-- <h1>-------- single-post.php ----------</h1> -->
    <section class="populaire">
        <div class="global carteSingle">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- <article> -->
            <?php
                if (has_post_thumbnail()) {
                the_post_thumbnail('large'); }
            ?>  
                <h2><?php the_title(); ?></h2>
            <div class="carteSingle__temperature"><?php the_content() ?>
            <p>Température minimale: <?php echo the_field("temperature_minimale");?> °C</p>
            <p>Température maximale: <?php echo the_field("temperature_maximale");?> °C</p>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
   
</body>
</html>