<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer {
    public function __construct() {
        parent::__construct("users", ["first_name", "last_name"]); 
        // __construct("tabela", ["campos que são NOT NULL"], "chave primária que NÃO É AUTO_INCREMENT" e checar se TIMESTAMP está em sua tabela ou não (true ou false));
    }

    // Como o id do user é uma chave estrangeira de outra tabela, precisamos dessa função...
    public function addresses() {
        return (new Address())->find("user_id=:uid", ":uid={$this->id}")->fetch(true);
    }
}