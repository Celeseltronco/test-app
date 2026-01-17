<?php
include "partials/header.php";
// include "partials/navigation.php";

if(!is_user_logged_in()){
    redirect("login.php");
}

$result = mysqli_query($conn, "SELECT id, username, usersurname, email, reg_date FROM users");

if($_SERVER['REQUEST_METHOD'] === "POST") {

    if(isset($_POST['edit_user'])){ 

        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $new_username = mysqli_real_escape_string($conn, $_POST['username']);
        $new_usersurname = mysqli_real_escape_string($conn, $_POST['usersurname']);
        $new_email = mysqli_real_escape_string($conn, $_POST['email']);

       
        $query_status = check_query(update_user($conn, $user_id, $new_username, $new_usersurname, $new_email)); 
 
        if($query_status === true){
            $_SESSION['message'] = "User updated successfully to {$new_username}";
            $_SESSION['msg_type'] = "success";
            redirect("admin.php");
        }

    } elseif(isset($_POST['delete_user'])){
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        
        $query_status = check_query( delete_user($conn, $user_id));
        if($query_status === true){

            $_SESSION['message'] = "User deleted successfully record with ID:{$user_id}";
            $_SESSION['msg_type'] = "success";
            redirect("admin.php");
        }

    }

}
?>
<h1>STUDENT PORTAL</h1>

<!-- Include Footer -->
<?php

include "partials/footer.php";

mysqli_close($conn)

?>