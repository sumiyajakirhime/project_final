<?php
	include "iheader.php";
	include "idbconnect.php";
	
?>		
	<div class="body">
            <div class="sub_header">
            <h1>Mushy</h1>
            </div>
            <form action="i_action_data.php" method="POST">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Your email">
                <label>Phone </label>
                <input type="text" name="phone" placeholder="+8801*********">
                <label>Send Money</label>
                <input type="text" name="send_money" >
               

                <input type="submit" Value="Submit">
            </form>
        </div>
	
	
<?php
	include "footer.php";
?>

