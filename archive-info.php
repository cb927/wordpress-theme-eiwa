<?php get_header(); ?>
<main>
    <section class="banner">
        <div class="container-lg">
            <div class="section__title color-white">
                <p class="title__main">INFORMATION</p>
                <p class="title__sub">お知らせ</p>
            </div>
        </div>
    </section>
    <section class="information">
        <div class="container-sm bg-gray">
            <div class="information__main">
                <?php
                query_posts('post_type=info');
                ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_guid(); ?>" class="info__item  font-20">
                        <div class="item__date"><?php the_modified_time(get_option('date_format')); ?></div>
                        <div class="item__title"><?php the_title(); ?></div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="contact-top second">
        <div class="container-lg">
            <div class="section__title color-white">
                <p class="title__main">CONTACT</p>
                <p class="title__sub">お問い合わせ</p>
            </div>
            <div class="contact__detail font-18">
                営業時間外でもお気軽にお問い合わせ下さい。<br>
                また、営業時間内であれば迅速に回答させて頂きます。
            </div>
            <a href="<?php echo home_url(); ?>/contact" class="btn btn-lg">お問い合わせフォームへ</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>