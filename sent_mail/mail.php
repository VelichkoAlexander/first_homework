<?php
$post = (!empty($_POST)) ? true : false;

$captcha;
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
if (!$captcha) {
    echo 'Пожалуйста, проверьте капчу.';
    exit;
}
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfhNP8SAAAAAMDjioAooIi_CtjlO0RBEtnlqKx2&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
if ($response . success == false) {
    echo '<h2>fuuuuuuu</h2>';
} else {


    if ($post) {
        $name = stripslashes($_POST['name']);
        $email = stripslashes($_POST['email']);
        $user_message = stripslashes($_POST['user_message']);
        $subject = 'Заявка';
        $error = '';
        $message = '
   <html>
              <head>
              <title>Заявка</title>

</head>
    <body>
    <p>Имя: ' . $name . '</p>
    <p>email: ' . $email . '</p>
<p>Сообщение: ' . $user_message . '</p>
</body>
    </html>';
    }
    $admin_mail = 'fessal@rambler.ru';
    $mail = mail($admin_mail, $subject, $message,
        "From: " . $name . " <" . $email . ">\r\n"
        . "Reply-To: " . $email . "\r\n"
        . "Content-type: text/html; charset=utf-8 \r\n"
        . "X-Mailer: PHP/" . phpversion());
    if ($mail) {
        echo 'OK';

    } else {
        echo "not ok";
    }
}
?>