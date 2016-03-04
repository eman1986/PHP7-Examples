<?php
require 'Framework/Entities/User.php';
require 'Framework/Entities/Application.php';

use Framework\Entities\{User, Application};

$user = new User();
$app = new Application();

$user->Name = 'Ed';

$app->ApplicationName = 'Phpstorm';
$app->ApplicationVersion = '10.0.3';