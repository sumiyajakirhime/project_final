<?php
include "iheader.php";
include "idbconnect.php";

$id = $_GET['editid'];

$sql = "SELECT * FROM crud WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

        <div class="body">
            <div class="sub_header">
              <h1>Update </h1>
            </div>
            <form action="i_action_update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $row['email']; ?>">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
		
                <label>Send Money</label>
                <input type="text" name="send_money" value="<?php echo $row['send_money']; ?>">
               
                
                <input type="submit" value="Update">
            </form>
        </div>

<?php
	include "footer.php";
?>

