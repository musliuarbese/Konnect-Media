<?php

include ('C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/config/database.php');

class postsController
{
   protected $db;

    public function __construct()
    {
       $this->db = new database;
    }

    public function all()
    {
       $query = $this->db->pdo->prepare('SELECT * FROM posts');
       $query->execute();
       $result= $query->fetchAll();
      // print_r($result);
      
      foreach($result as $row)
      {
        $posts_id=$row['posts_id']; 
        $tile =$row['title'];
        $subtile =$row['subtitle'];
        $content=$row['content'];
        $photo=$row['photo'];
      }
     
    }
    
    public function store($request)
    {
        
        $query = $this->db->pdo->prepare('INSERT INTO posts(title, subtitle, content, photo)
        VALUES (:title, :subtitle, :content, :photo)');
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':subtitle', $request['subtitle']);
        $query->bindParam(':content', $request['content']);
        $query->bindParam(':photo', $request['photo']);
        $query->execute();
        return header('Location: posts.php');
    }
    public function edit($posts_id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM posts WHERE posts_id = :posts_id');
        $query->execute(['posts_id' => $posts_id]);
        return $query->fetch();
    }
    public function update($posts_id, $request)
    {
        $query = $this->db->pdo->prepare('UPDATE posts SET title = :title, subtitle = :subtitle, content = :content, photo = :photo WHERE posts_id = :posts_id');
        $query->execute([
            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'content' => $request['content'],
            'photo' => $request['photo'],
            'posts_id' => $request['posts_id']
        ]);
        //return header('Location: editServices.php');
    }
    public function destroy($posts_id)
    {
        $query = $this->db->pdo->prepare('DELETE from posts WHERE posts_id = :posts_id');
        $query->execute(['posts_id' => $posts_id]);
      // return header('Location: deleteContact.php');
    }
}
?>


