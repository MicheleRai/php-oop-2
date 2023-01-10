<?php

class user{
    protected $nome;
    protected $cognome;
    protected $email;

    public function __construct($nome, $cognome, $email)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
    }
}
$matteo = new user ('matteo', 'Rossi', 'matt@gmail.com');
$alessandro = new user ('alessandro', 'bianchi', 'ale@libero.it');

