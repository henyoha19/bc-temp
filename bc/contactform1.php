<?php include 'includes/header.php';?>

<?php
//postback2.php

if(isset($_POST["FirstName"])){ //if data show it
    
    //echo $_POST["FirstName"];
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    
}else{ // nodata,show form
    echo '
    <form action="" method="post">
        <p><label for="FirstName">First Name:</label><br />
            <input autofocus="autofocus" type ="text" name="FirstName" id="Firstname" 
            required="required" placeholder="Enter First Name"
            title="First Name is required" />
        </p>
        <p><label for="LastName">Last Name:</label><br />
            <input type ="text" name="LastName" id="LastName" 
            required="required" placeholder="Enter Last Name"
            title="Last Name is required" />
        </p>
        <p><label for="Email">Email:</label><br />
            <input type ="Email" name="Email" id="Email" 
            required="required" placeholder="Enter Email"
            title="Email is required" />
        </p>
        <p><label for="Comments">Comments:</label><br />
            <textarea name="Comments" id="comments"
            placeholder="Your comments is important to us"> 
            </textarea> 
        </p>
        <p><input type="submit" /></p> 
    </form>
    ';
    
}
?>

 <?php include 'includes/footer.php';?>
