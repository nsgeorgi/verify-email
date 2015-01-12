<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sample</title>
    </head>
    <body>
        <?php
        include_once 'class.verifyEmail.php';

        $email = 'noreplybbbbbbb@gmail.com';

        $vmail = new verifyEmail();

        if ($vmail->check($email)) {
            echo 'email &lt;' . $email . '&gt; exist!';
        } elseif ($vmail->isValid($email)) {
            echo 'email &lt;' . $email . '&gt; valid, but not exist!';
        } else {
            echo 'email &lt;' . $email . '&gt; not valid and not exist!';
        }
        ?>
    </body>
</html>
