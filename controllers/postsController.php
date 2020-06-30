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
        $title =$row['title'];
        $subtitle =$row['subtitle'];
        $content=$row['content'];
        $photo=$row['photo'];
        ?>
        
  <form method="POST" action="editPosts.php">
  <div class ="clear">
    <label for="posts_id">PostsID:
    <input type="text" name="posts_id" value="<?php echo $posts_id;  ?>" id ="posts_id"/>
  </div>
    <div class="clear1"></div>
        <label>Title:
        <input class="text-input" id="title" type="text" name="title" value = "<?php echo $title;?>"/>

    <div class="clear1"></div>
      <label>Subtitle:
      <input class="text-input" id="subtitle" type="text" name="subtitle" value = "<?php echo $subtitle;?>"/>

    <div class="clear1"></div>
       <label>Content:
        <textarea id="message" name="content" ><?php echo $content;?></textarea>

    <div class="clear1"></div>

    <label>Photo:
        <input class="text-input" id="photo" type="text" name="photo" value = "<?php echo $photo;?>"/>

        <div id = "butonat">
  <input type="submit"  value="EDIT" name="edit"  class="formButoni" onclick="">
  <input type="submit"  value="DELETE" name="delete" class="formButoni" onclick=""></a><br><br>
  <hr>
  </form>
 
 <?php }
     
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
        return header('Location: showPosts.php');
    }
    public function destroy($posts_id)
    {
        $query = $this->db->pdo->prepare('DELETE from posts WHERE posts_id = :posts_id');
        $query->execute(['posts_id' => $posts_id]);
      return header('Location: showPosts.php');
    }
}
?>


