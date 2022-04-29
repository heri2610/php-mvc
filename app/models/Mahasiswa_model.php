<?php

class Mahasiswa_model{
  private $tabel = 'mahasiswa';
  private $db;

  public function __construct(){
      $this->db= new Database;
  }
    public function getAllMahasiswa(){
       $this->db->query('SELECT * FROM ' . $this->tabel);
       return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
       $this->db->query('SELECT * FROM ' . $this->tabel .' WHERE id=:id');
       $this->db->bind('id', $id);
       return $this->db->singel();
    }

    public function tambahDataMahasiswa($data){
        $query= "INSERT INTO "  . $this->tabel .  "
         VALUES 
         ('', :nama, :prodi, :nim, :alamat, :email)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
    public function hapusDataMahasiswa($id){
        $query= "DELETE FROM mahasiswa WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    }

    public function ubahDataMahasiswa($data){
        $query= "UPDATE mahasiswa SET nama = :nama, prodi = :prodi, nim = :nim, alamat = :alamat, email = :email
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('id', $data['id']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
}
