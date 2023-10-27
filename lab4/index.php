<?php	
	include 'header.html';
?>
<?php 
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
        $source=$_GET['source'];
    }
?>
<input type="hidden" name="user_id" value="6">