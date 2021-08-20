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
            <p class="title__main">サービスステーション事業</p>
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
            <div class="service__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-top.png" alt="">
            </div>
            <div class="service__list font-20">
                <div class="list__item">
                    <div class="item__name">営業時間</div>
                    <div class="item__detail">07:00 〜 20:00</div>
                </div>
                <div class="list__item">
                    <div class="item__name">所在地</div>
                    <div class="item__detail">〒 570-0033　大阪府 守口市 大宮通 3丁目4-1</div>
                </div>
                <div class="list__item">
                    <div class="item__name">電話番号</div>
                    <div class="item__detail">06-6996-8883</div>
                </div>
                <div class="list__item">
                    <div class="item__name">定休日</div>
                    <div class="item__detail">日曜日</div>
                </div>
            </div>
        </section>
    </div>
    <section class="service-other bg-gray">
        <div class="container-md">
            <div class="other__top">
                その他事業
            </div>
            <div class="other__main second">
                <div class="other__title">燃料配達サービス</div>
                <div class="other__detail font-18">
                    ご注文は前日までに頂けますと、より確実にお届けできます。詳しくはお電話にてお気軽にお問い合わせください。<br>
                    電話番号：06-6996-6895
                </div>
                <a href="<?php echo home_url(); ?>/service1" class="btn btn-sm">詳しく見る</a>
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