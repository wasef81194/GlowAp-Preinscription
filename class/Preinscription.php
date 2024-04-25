<?php

class Preinscription{
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $roles;
    private $table = 'preinscription';

    public function __construct($nom, $prenom, $email, $telephone, $roles)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->roles = json_encode($roles);
    }

    public function flush(){
        $db = new Database();
        return $db->insert($this->table, ["nom" => $this->nom, "prenom" => $this->prenom, "email" => $this->email, "telephone" => $this->telephone, "roles" => $this->roles]);
    }

}
