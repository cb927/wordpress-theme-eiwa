<?php get_header(); ?>
<main>
    <section class="banner banner--top">
        <div class="banner__text1">
            安全・スピーディーに<br>
            建設重機などの燃料をお届け致します。
        </div>
        <img class="banner__text2" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-letter.png" alt="">
        <div class="banner__text3">栄和石油にお任せ下さい。</div>
    </section>
    <section class="about">
        <div class="container-lg">
            <div class="section__title color-blue">
                <p class="title__main">About</p>
                <p class="title__sub">栄和石油とは</p>
            </div>
            <div class="about__detail font-18">
                栄和石油では、関西エリアを中心に軽油・重油・潤滑油をお客様ご指定の場所へ配達しております。<br>
                ご要望に合わせて配達致しますので、未然に燃料切れを防ぎ業務遅れが最小限に<br>
                抑えることができ安心です。
            </div>
        </div>
    </section>
    <section class="service">
        <div class="container-lg">
            <div class="section__title section__title--row color-blue">
                <p class="title__main">SERVICE</p>
                <p class="title__sub">事業案内</p>
            </div>
            <div class="service__detail font-18">
                弊社は、コスモ石油株式会社特約店により重機用燃料を配達エリア内で小回り・機動性に優れた配送で <br>
                安全・スピーディーにお客様の元に配達しております。
            </div>
            <div class="service__goto service__goto--1">
                <div class="goto__title">燃料配達サービス</div>
                <div class="goto__detail font-18">
                    ご注文は前日までに頂けますと、より確実にお届けできます。詳しくはお電話にてお気軽にお問い合わせください。<br>
                    電話番号：06-6996-6895
                </div>
                <a href="<?php echo home_url(); ?>/service1" class="btn btn-sm">詳しく見る</a>
            </div>
            <div class="service__goto service__goto--2">
                <div class="goto__title">サービスステーション事業</div>
                <div class="goto__detail font-18">
                    サービスステーション（ガソリンスタンド）のフィールドスタッフとして、給油だけでなく、<br>
                    マイカーリース等のご提案をします。
                </div>
                <a href="<?php echo home_url(); ?>/service2" class="btn btn-sm">詳しく見る</a>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container-lg">
            <div class="section__title color-blue">
                <p class="title__main">INFORMATION</p>
                <p class="title__sub">お知らせ</p>
            </div>
            <div class="news__main">
                <?php
                query_posts('posts_per_page=3&post_type=info');
                ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="news__item">
                        <figure class="item__img">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <div class="item__text">
                            <div class="item__title"><?php the_title(); ?></div>
                            <div class="item__detail">
                                <?php the_content(); ?>
                            </div>
                            <a href="<?php the_guid(); ?>" class="item__more">
                                READ MORE
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
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