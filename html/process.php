<?php 
require_once('server.php');
?>


<?php 


if(isset($_POST)) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password = sha1($_POST['password']);


            $sql = "INSERT INTO userstest (firstname, lastname, email, phonenumber, password) VALUES (?, ?, ?, ?, ?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
            if($result) {
                echo 'Successfully saved.';
            }
            else {
                echo 'Errors encountered';
            }
}
else {


    echo 'No data';
}



 ?>