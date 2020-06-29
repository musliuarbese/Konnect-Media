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
       $query = $this->db->pdo->prepare('SELECT * FROM contact');
       $query->execute();
       $result= $query->fetchAll();
      // print_r($result);
      
      foreach($result as $row){
        $contact_id=$row['contact_id']; 
        $name =$row['name'];
        $employeed =$row['employeed'];
        $email =$row['email'];
        $message=$row['message'];
        $gender=$row['gender'];
        $subject=$row['subject'];
        $country=$row['country'];
         ?>
      <form action="deleteContact.php" class="form-contact" method="post" onsubmit = "destroy(<?php echo $contact_id; ?>);">

     <div class="holder"> 
     
        <br> <label for="email">Email:<span class="green"></span> </label>
        <input type="text" name="email" value="<?php echo $email;  ?>" id ="email"/>
        <br><br> <label for="contact_id">ContactID:<span class="green"></span> </label>
        <input type="text" name="contact_id" value="<?php echo $contact_id;  ?>" id ="contact_id"/>
      </div>
      <div class="holder"> 
        <br><br><label for="message">Message: <span class="green"></span></label>
        <textarea rows="10" cols="10" name="message" id="message"><?php echo 'Subject: ', $subject; echo "\r\n"; echo 'Message:',  $message; ?></textarea>
         <span id="message_validation" class="error"></span>
      </div>
      
       <input type="submit"  value="DELETE" class="formButoni" onclick=""/>
    </form>


         <?php
      }
     
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
        return header('Location: home.php');
    }
   
    public function destroy($contact_id)
    {
       
        $query = $this->db->pdo->prepare('DELETE from contact WHERE contact_id = :contact_id');
        $query->execute(['contact_id' => $contact_id]);
       return header('Location: showContact.php');
    }
}
?>


