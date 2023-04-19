<?php
class User_model{
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getName($id)
    {
        $this->db->query('SELECT "Name" FROM' . $this->table . ' WHERE idUser =:idUser)');
        $this->db->bind('idUser', $id);
        return $this->db->single();
    }
    public function getEmail($id)
    {
        $this->db->query('SELECT "Email" FROM' . $this->table . ' WHERE idUser=:idUser)');
        $this->db->bind('idUser', $id);
        return $this->db->single();
    }
}