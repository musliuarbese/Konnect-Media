<?php
include('db_con.php'); 

$query = "Select * from contact";
$result = mysqli_query($conn, $query);

$count = mysqli_num_rows($result);
echo("Reshtat ne DB = $count");

while($row = mysqli_fetch_array($result)){
    ?>
    <p><?php echo $row["name"]; ?></p>
    <p><?php echo $row["email"]; ?></p>
    <p><?php echo $row["gender"]; ?></p>
    <p><?php echo $row["employeed"]; ?></p>
    <p><?php echo $row["country"]; ?></p>
    <p><?php echo $row["subject"]; ?></p>
    <p><?php echo $row["message"]; ?></p>
    <a href = "delete_contact.php?contact_id = <?php echo $row['$contact_id']; ?>">Delete</a>
<?php
}
?>
