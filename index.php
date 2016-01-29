<?php

use App\Models\HasEmail;
use App\Models\User;

require __DIR__ . '/autoload.php';

$users = User::findAll();

function sendEmail(HasEmail $user, string $message)
{
    echo 'Почта уходит на ' . $user->email;
}

sendEmail($users[0], 'Hello!');