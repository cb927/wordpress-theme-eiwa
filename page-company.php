<?php get_header(); ?>
<main>
    <section class="banner">
        <div class="container-lg">
            <div class="section__title color-white">
                <p class="title__main">COMPANY</p>
                <p class="title__sub">会社概要</p>
            </div>
        </div>
    </section>

    <section class="company">
        <div class="container-md">
            <div class="section__title section__title--row color-blue second">
                <p class="title__main">TOP MESSAGE</p>
                <p class="title__sub">社長挨拶</p>
            </div>
            <div class="company__main">
                <div class="company__top">
                    <figure class="top__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-top.png" alt="">
                    </figure>
                    <div class="top__content">
                        <div class="top__title">代表取締役社長　社長名社長名社長名</div>
                        <div class="top__detail font-20">
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
                <div class="company__bottom font-20">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    <br><br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    <br><br>
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                </div>
            </div>
        </div>
    </section>

    <section class="contact-top">
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