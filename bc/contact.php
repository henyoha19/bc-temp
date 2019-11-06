<?php include 'includes/config.php'?> 
<?php include 'includes/header.php'?> 
<h2>Contact Us</h2>


<?php

$to = 'henockyoha@yahoo.com';

$from = 'noreply@dreamhost.com';


if(isset($_POST["FirstName"])){//if data show it
    
    //echo $_POST["FirstName"];
   /* echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
*/
    
$replayTo = $_POST["Email"] ;

$subject = 'Test ITC240 contact page';

$message = $_POST["Comments"];
    
$today = date('F j, Y, g:i:s a');
    
$subject = $today;

$headers = 'From: noreply@example.com' . PHP_EOL .

    'Reply-To: user@hotmail.com' . PHP_EOL .

    'X-Mailer: PHP/' . phpversion();


mail($to,$subject,$message,$headers);

echo 'Email sent?   '  . $today; 


}else{//no data, show form
  echo '
   <form action="" method="post">
    
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="text-heading" for="FirstName">First Name</label>
            <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
        </div>
        
       <div class="form-group col-lg-4">
            <label class="text-heading" for="LastName">Last Name</label>
            <input class="form-control" type="text" name="LastName" id="LastName" required />
        </div>
        
        <div class="form-group col-lg-4">
            <label class="text-heading" for="Email">Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required />
        </div>
        
        
        <div class="clearfix"></div>
        
        
       <div class="form-group col-lg-12">
            <label class="text-heading" for="Comments">Comments</label>
            <textarea class="form-control" name="Comments" id="Comments"></textarea>
        </div>
        
        <div class="form-group col-lg-12">
            <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
        </div>
    </div>
    </form>
  ';
 
}
?>

   
   <?php include 'includes/footer.php'?>