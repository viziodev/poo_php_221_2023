<?php 
class RoleModel{
    var int $id; 
    var string $libelle;  

    public function save($libelle){
        
        $sql="insert into role(libelle) values(:libelle)";
    }
}