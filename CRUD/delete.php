<?php
    require_once __DIR__.'/../vendor/autoload.php';

    use Source\Models\User;
    use Source\Models\Address;

    $user = (new User())->findbyId(1);

    if($user) {
        $address = (new Address())->find("user_id = {$user->id}")->fetch(false);
        $address->destroy();
        $user->destroy();
    }
    else {
        var_dump($user);
    }
?>