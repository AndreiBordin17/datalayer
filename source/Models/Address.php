<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer {
    public function __construct() {
        parent::__construct("addresses", ["user_id"], "addr_id", false); 
        // __construct("tabela", ["campos que são NOT NULL"], "chave primária que NÃO É AUTO_INCREMENT" e checar se TIMESTAMP está em sua tabela ou não (true ou false));
    }

    public function add(User $user, string $street, string $number): Address{
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;

        return $this;
    }
}