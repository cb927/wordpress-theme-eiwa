<?php get_header(); ?>
<main>
    <section class="banner">
        <div class="container-lg">
            <div class="section__title color-white">
                <p class="title__main">SERVICE</p>
                <p class="title__sub">事業案内</p>
            </div>
        </div>
    </section>
    <div class="container-md">
        <div class="section__title section__title--row second color-blue mt-80">
            <p class="title__main">燃料配達サービス事業</p>
        </div>
        <section class="service">
            <div class="service__title">ここに見出しのテキストが入ります</div>
            <div class="service__text1 color-blue">
                ここに小見出しのテキストが入ります。ここに小見出しのテキストが入ります。ここに小見出しのテキストが入ります。ここに小見出しのテキストが入ります。
            </div>
            <div class="service__text2 font-20">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </div>
            <div class="service__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-top.png" alt="">
            </div>
        </section>
        <section class="service">
            <div class="service__title">ここに見出しのテキストが入ります</div>
            <div class="service__team">
                <div class="team__member">
                    <figure class="member__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-top.png" alt="">
                    </figure>
                    <div class="member__name">特徴がここに入ります</div>
                    <div class="member__detail font-18">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        ここにテキストが入ります。ここにテキストが入ります。
                    </div>
                </div>
                <div class="team__member">
                    <figure class="member__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-top.png" alt="">
                    </figure>
                    <div class="member__name">特徴がここに入ります</div>
                    <div class="member__detail font-18">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        ここにテキストが入ります。ここにテキストが入ります。
                    </div>
                </div>
                <div class="team__member">
                    <figure class="member__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-top.png" alt="">
                    </figure>
                    <div class="member__name">特徴がここに入ります</div>
                    <div class="member__detail font-18">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        ここにテキストが入ります。ここにテキストが入ります。
                    </div>
                </div>
            </div>
            <div class="service__text2 font-20">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </div>
            <div class="service__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-top.png" alt="">
            </div>
        </section>
    </div>
    <section class="service-other bg-gray">
        <div class="container-md">
            <div class="other__top">
                その他事業
            </div>
            <div class="other__main">
                <div class="other__title">サービスステーション事業</div>
                <div class="other__detail font-18">
                    サービスステーション（ガソリンスタンド）のフィールドスタッフとして、給油だけでなく、<br>
                    マイカーリース等のご提案をします。
                </div>
                <a href="<?php echo home_url(); ?>/service2" class="btn btn-sm">詳しく見る</a>
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