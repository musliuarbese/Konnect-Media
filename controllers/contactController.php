<?php

include ('../config/database.php');


class postsController
{
   protected $db;

    public function __construct()
    {
       $this->db = new Database;
    }

    public function all()
    {
       $query = $this->db->pdo->query('SELECT FROM * contact');
       return $query->fetchAll();
    }

    public function store($request)
    {
        isset($request['is_admin']) ? $isAdmin == 1 : $isAdmin == 2;
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $quers = $this->db->pdo->prepare('INSERT INTO posts(name, email, gender, employeed, country, subject, message, is_admin)
        VALUES (:name, :email, :gender, :employeed, :country, :subject, :message, :is_admin)');
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':gender', $request['gender']);
        $query->bindParam(':employeed', $request['employeed']);
        $query->bindParam(':country', $request['country']);
        $query->bindParam(':subject', $request['subject']);
        $query->bindParam(':message', $request['message']);
        $query->bindParam(':is_admin', $isAdmin);

        return header('Location: ./contact.php');
    }
    
    public function edit($contact_id)
    {
        $query = $this->db->pdo->prepare('SELECT * from contact  WHERE posts_id = :posts_id');
        $query->execute(['contact_id' => $contact_id]);

        return $query->fetch();
    }
    public function update($contact_id, $request)
    {

        isset($request['is_admin']) ? $isAdmin == 1 : $isAdmin == 2;
        $query = $this->db->pdo->prepare('UPDATE posts SET name = :name, email = :email, gender = :email, employeed = :employeed, country = :country, subject = :subject, message = :message, is_admin = :is_admin WHERE contact_id = :contact_id');
        $query->execute([
            'name'=> $request['name'],
            'email'=> $request['email'],
            'gender'=> $request['gender'],
            'employeed'=> $request['employeed'],
            'country'=> $request['country'],
            'subject'=> $request['subject'],
            'message'=> $request['message'],
            'is_admin'=> $isAdmin,
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

