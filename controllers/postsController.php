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
        $post_author=$row['post_author'];
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
    <div class="clear1"></div>
      <?php if(isset($_SESSION['logged_in']) ){
      ?>
         <input type="text" id="post_author"name="post_author" value = "<?php echo $name = $_SESSION['name'];?>" />
          <?php }?>
    <div id = "butonat">
        <input type="submit"  value="EDIT" name="edit"  class="formButoni" onclick="">
        <input type="submit"  value="DELETE" name="delete" class="formButoni" onclick=""></a><br><br>
        <hr>
    </div>
  </form>
 
 <?php }
     
  }
    
    public function store($request)
    {
      if(!empty($_POST['title']))
      {
        if(!empty($_POST['subtitle']))
        {
          if(!empty($_POST['content']))
          {
            if(!empty($_POST['photo']))
            { 
                        $query = $this->db->pdo->prepare('INSERT INTO posts(title, subtitle, content, photo, post_author)
                        VALUES (:title, :subtitle, :content, :photo, :post_author)');
                        $query->bindParam(':title', $request['title']);
                        $query->bindParam(':subtitle', $request['subtitle']);
                        $query->bindParam(':content', $request['content']);
                        $query->bindParam(':photo', $request['photo']);
                        $query->bindParam(':post_author', $request['post_author']);
                        if($query->execute())
							          {
								          echo '<script type="text/javascript">window.alert("You succesfully post a Post!")</script>';
								          header( "refresh:0; url=adminPosts.php" );
							          }else{
								          echo '<script type="text/javascript">window.alert("You did not post any POST!")</script>';
								          header( "refresh:0; url=adminPosts.php" );
					            	}
				
					}else{
						echo '<script type="text/javascript">window.alert("You did NOT succesfully posted! ENTER THE PHOTO")</script>';
						header( "refresh:0; url=adminPosts.php" );
					}
				}else{
					echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE CONTENT")</script>';
					header( "refresh:0; url=adminPosts.php" );
        }
      }else{
        echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE SUBTITLE")</script>';
        header( "refresh:0; url=adminPosts.php" );
      }
    }else{
      echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE TITLE")</script>';
      header( "refresh:0; url=adminPosts.php" );
    }
  }
  
    public function update($posts_id, $request)
    {
        $query = $this->db->pdo->prepare('UPDATE posts SET title = :title, subtitle = :subtitle, content = :content, photo = :photo, post_author = :post_author WHERE posts_id = :posts_id');
        $query->execute([
            'title' => $request['title'],
            'subtitle' => $request['subtitle'],
            'content' => $request['content'],
            'photo' => $request['photo'],
            'post_author' => $request['post_author'],
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


