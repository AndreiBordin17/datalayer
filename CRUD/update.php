<?php
    require_once __DIR__.'/../vendor/autoload.php';

    use Source\Models\User;

    $user = (new User())->findById(6);
    $user->first_name = 'Thomaz';
    $user->last_name = 'Souza';
    $user->save();

    var_dump($user);
?>