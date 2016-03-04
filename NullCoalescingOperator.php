<?php
$name = $_GET['fullname'] ?? 'nobody';
$email = $_GET['email'] ?? 'nobody@nomailer.com';

echo sprintf('Hello, %s. Your Email address is %s.<hr><br>', $name, $email);


echo <<<'FORM'
    <form method="get" action="NullCoalescingOperator.php">
    <input type="text" name="fullname" placeholder="Full Name" required><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="submit" value="Submit">
    </form>
FORM;
