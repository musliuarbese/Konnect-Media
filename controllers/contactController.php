<?php

include ('C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/config/database.php');

class contactController
{
   protected $db;

    public function __construct()
    {
       $this->db = new database;
    }

    public function all()
    {
       $query = $this->db->pdo->query('SELECT FROM * contact');
       return $query->fetchAll();
    }
   
    public function store($request)
    {
        
        $query = $this->db->pdo->prepare('INSERT INTO contact(name, email, gender, employeed, country, subject, message)
        VALUES (:name, :email, :gender, :employeed, :country, :subject, :message)');
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':gender', $request['gender']);
        $query->bindParam(':employeed', $request['employeed']);
        $query->bindParam(':country', $request['country']);
        $query->bindParam(':subject', $request['subject']);
        $query->bindParam(':message', $request['message']);
        $query->execute();
        return header('Location: Home.php');
    }
    
    public function edit($contact_id)
    {
        $query = $this->db->pdo->prepare('SELECT * from contact  WHERE contact_id = :contact_id');
        $query->execute(['contact_id' => $contact_id]);

        return $query->fetch();
    }
    public function update($contact_id, $request)
    {

        $query = $this->db->pdo->prepare('UPDATE contact SET name = :name, email = :email, gender = :email, employeed = :employeed, country = :country, subject = :subject, message = :message, is_admin = :is_admin WHERE contact_id = :contact_id');
        $query->execute([
            'name'=> $request['name'],
            'email'=> $request['email'],
            'gender'=> $request['gender'],
            'employeed'=> $request['employeed'],
            'country'=> $request['country'],
            'subject'=> $request['subject'],
            'message'=> $request['message'],
            'contact_id'=> $contact_id
             
        ]);
           return header('Location: ./contact.php');
    }

    public function destroy($contact_id)
    {
        $query = $this->db->pdo->prepare('DELETE from contact WHERE contact_id = :contact_id');
        $query->execute(['contact_id' => $contact_id]);
       return header('Location: ./contact.php');
    }
}

?>

