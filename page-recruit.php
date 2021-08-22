<?php get_header(); ?>
<main>
    <section class="banner">
        <div class="container-lg">
            <div class="section__title color-white">
                <p class="title__main">RECRUIT</p>
                <p class="title__sub">採用情報</p>
            </div>
        </div>
    </section>
    <section class="recruit">
        <div class="container-md">
            <div class="recruit__main">
                <figure class="recruit__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit.jpg" alt="">
                </figure>
                <div class="recruit__detail font-20">
                    ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。
                </div>
            </div>
        </div>
    </section>
    <div class="container-md">
        <hr>
    </div>
    <section class="voice">
        <div class="container-md">
            <div class="section__title section__title--row color-blue second">
                <p class="title__main">VOICE</p>
                <p class="title__sub">社員の声</p>
            </div>
            <div class="voice__main">
                <div class="voice__item">
                    <figure class="item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice1.jpg" alt="">
                    </figure>
                    <div class="item__content">
                        <div class="item__title">社員名 社員名 さん</div>
                        <div class="item__detail font-20">
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。
                        </div>
                    </div>
                </div>
                <div class="voice__item">
                    <figure class="item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/voice2.jpg" alt="">
                    </figure>
                    <div class="item__content">
                        <div class="item__title">社員名 社員名 さん</div>
                        <div class="item__detail font-20">
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。ここにテキストが入ります。
                            ここにテキストが入ります。
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <a href="<?php echo home_url(); ?>/application" class="btn btn-lg mt-80">ご応募フォームはこちら</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>