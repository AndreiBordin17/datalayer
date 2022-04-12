<?php

    require_once __DIR__.'/../vendor/autoload.php';

    use Source\Models\User;
    use Source\Models\Address;

    $user = new User();
    $user->first_name = 'Andrei';
    $user->last_name = 'Bordin';
    $user->genre = 'M';
    $user->save();

    $addr = new Address();
    $addr->add($user, "Rua 9 de Julho", "761");
    $addr->save();

    var_dump($user);
    var_dump($addr);