<?php

include ('C:/xampp/htdocs/ProjektiWeb_ArbeseMusliu/config/database.php');

class servicesController
{
   protected $db;

    public function __construct()
    {
       $this->db = new database;
    }

    public function all()
    {
       $query = $this->db->pdo->prepare('SELECT * FROM services');
       $query->execute();
       $result= $query->fetchAll();
      // print_r($result);
      
      foreach($result as $row)
      {
        $services_id=$row['services_id']; 
        $title =$row['title'];
        $icon=$row['icon'];
       $content=$row['content'];
       $services_author=$row['services_author'];
      
         ?>
        <form action="editServices.php" class="form-contact" method="post" onsubmit = "edit(<?php $_POST['services_id']?>);">
           <div class="holder"> 
              <label for="services_id">ServicesID:<span class="green"></span> </label>
              <input type="text" name="services_id" value="<?php echo $services_id;  ?>" id ="services_id"/>
           </div>
           <div class = "holder">
               <br><label for="title">Title: <span class="green"></span></label> 
               <input name="title" id="title" value="<?php echo $title; ?>"></input>
           </div>
           <div class="holder"> 
                <br><br><label for="icon">Icon: <span class="green"></span></label> 
                <input name="icon" id="icon" value="<?php echo $icon; ?>"></input>
          </div>
          <div class="holder"> 
                 <br><br><label for="content">Content: <span class="green"></span></label>
                 <textarea rows="10" cols="10" name="content" id="content" ><?php echo $content;?></textarea> 
          </div><br>
          <div class = "holder">
              <?php if(isset($_SESSION['logged_in']) ){
              ?>
                <input type="text" id="services_author"name="services_author" value = "<?php echo $name = $_SESSION['name'];?>" />
                <?php }?>
          </div><br>
          <div id = "butonat">
                 <input type="submit" name = "edit" value="EDIT" class="formButoni" onclick="">
                 <input type="submit"  name = "delete" value="DELETE" class="formButoni" onclick=""><br><br>
        <hr>
          </div>  
  </form>
     <?php 

    }
  }
    
    public function store($request)
    {
      if(!empty($_POST['title']))
      {
        if(!empty($_POST['icon']))
        {
          if(!empty($_POST['content']))
          {
                   $query = $this->db->pdo->prepare('INSERT INTO services(title, icon, content, services_author) 
                   VALUES (:title, :icon, :content, :services_author)');
                   $query->bindParam(':title', $request['title']);
                   $query->bindParam(':icon', $request['icon']);
                   $query->bindParam(':content', $request['content']);
                   $query->bindParam(':services_author', $request['services_author']);
              if($query->execute())
							{
								echo '<script type="text/javascript">window.alert("You succesfully post a services!")</script>';
								header( "refresh:0; url=adminServices.php" );
							}else{
								echo '<script type="text/javascript">window.alert("You did not post any service!")</script>';
								header( "refresh:0; url=adminServices.php" );
						}
				
					}else{
						echo '<script type="text/javascript">window.alert("You did NOT succesfully posted! ENTER THE CONTENT")</script>';
						header( "refresh:0; url=adminServices.php" );
					}
				}else{
					echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE ICON")</script>';
					header( "refresh:0; url=adminServices.php" );
        }
      }else{
        echo '<script type="text/javascript">window.alert("You DID NOT succesfully posted! ENTER THE TITLE")</script>';
        header( "refresh:0; url=adminServices.php" );
      }
    }
    public function update($services_id, $request)
    {
        $query = $this->db->pdo->prepare('UPDATE services SET title = :title, icon = :icon, content = :content, services_author = :services_author WHERE services_id = :services_id');
        $query->execute([
            'title' => $request['title'],
            'icon' => $request['icon'],
            'content' => $request['content'],
            'services_author' => $request['services_author'],
            'services_id' => $request['services_id']
        ]);
        return header('Location: showServices.php');
    }
    public function destroy($services_id)
    {
        $query = $this->db->pdo->prepare('DELETE from services WHERE services_id = :services_id');
        $query->execute(['services_id' => $services_id]);
       return header('Location: showServices.php');
    }
}
?>


