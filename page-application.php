<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['uname'];
    $name_confirm = $_POST['uname_confirm'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $email_confirm = $_POST['email_confirm'];
    $content = $_POST['message'];
    $contact_way = $_POST['contact_way'];
    $to = 'whitenight927@gmail.com';

    $subject = 'ご応募を受け付けました。';

    $body = '
    ご応募を受付ました。回答まで3営業日ほど頂いております。<br>
    もう少々お待ち頂けますと幸いです。<br>
    <br>
    -----------------------------------------<br>
    <br>
    お名前：' . $name . '<br>
    お名前（フリガナ）：' . $name_confirm . '<br>
    電話番号：' . $phone . '<br>
    メールアドレス：' . $email . '<br>
    メールアドレス（確認）：' . $email_confirm . '<br>
    ご回答方法：' . $contact_way . '<br>
    備考欄：' . $content . '<br>
    <br>
    -----------------------------------------<br>
    <br>
    栄和石油株式会社
    ';
    // var_dump($name, $name_confirm, $phone, $email, $email_confirm, $content, $contact_way);exit;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail($to, $subject, $body, $headers);
}
?>

<?php get_header(); ?>
<main>
    <section class="banner">
        <div class="container-lg">
            <div class="section__title color-white">
                <p class="title__main">APPLICATION FORM</p>
                <p class="title__sub">応募フォーム</p>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container-sm bg-gray">
            <div class="contact__main">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="" class="form-label">お名前<span>必須</span></label>
                        <input name="uname" type="text" class="form-control" placeholder="例）山田　太郎" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">お名前(フリガナ)<span>必須</span></label>
                        <input name="uname_confirm" type="text" class="form-control" placeholder="例）ヤマダ　タロウ" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">電話番号<span>必須</span></label>
                        <input name="phone" type="text" class="form-control" placeholder="例）090-1234-5678" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">メールアドレス<span>必須</span></label>
                        <input name="email" type="text" class="form-control" placeholder="例）eiwa@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">メールアドレス(確認)<span>必須</span></label>
                        <input name="email_confirm" type="text" class="form-control" placeholder="例）eiwa@example.com" required>
                    </div>
                    <div class="form-group">
                        <p for="" class="form-label">ご回答方法<span>必須</span></p>
                        <div class="checkbox-group">
                            <div class="checkbox">
                                <input type="radio" name="contact_way" value="email" checked>
                                <label for="">メール</label>
                            </div>
                            <div class="checkbox">
                                <input type="radio" name="contact_way" value="phone">
                                <label for="">お電話</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">お問い合わせ内容<span>必須</span></label>
                        <textarea name="message" id="" class="form-control" rows="10" placeholder="例）お問い合わせ内容をこちらに記載してください。" required></textarea>
                    </div>
                    <a href="#!" id="submit" class="btn btn-lg">送信する</a>
                    <button id="real_submit" type="submit" style="display: none;">submit</button>
                </form>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function(){
        $('#submit').click(function(){
            $('#real_submit').trigger('click');
        })
    })
</script>
<?php get_footer(); ?>