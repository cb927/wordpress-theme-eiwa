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
    <section class="single-information">
        <div class="container-sm bg-gray">
            <div class="single__main">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="single__date"><?php the_modified_time(get_option('date_format')); ?></div>
                        <div class="single__title"><?php the_title(); ?></div>
                        <figure class="single__img">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <div class="single__detail font-20">
                            <?php the_content(); ?>
                        </div>
                        <a href="<?php echo home_url(); ?>/info" class="single__back">BACK</a>

                    <?php endwhile; ?>
                <?php endif; ?>
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
            <a href="<?php echo home_url(); ?>contact<?php echo home_url(); ?>" class="btn btn-lg">お問い合わせフォームへ</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>