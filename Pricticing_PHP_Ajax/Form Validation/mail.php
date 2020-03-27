<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $message=$_POST['message'];
    $submit=$_POST['submit'];

    $errorEmpty = false;
    $errorEmail = false;

    if(empty($name) || empty($email) || empty($message)){
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Write a valid e-mail address!</span>"; 
        $errorEmail = true;
    }
    else {
        echo "<span class='form-success'>Fill in all fields!</span>";
    }

}
else{
    echo "There was an error";
}

?>

<script>
    $("#mail-name, #mail-email, #mail-message, #mail-gender").removeClass("input-error");
    const errorEmpty="<?php echo $errorEmpty; ?>";
    const errorEmail="<?php echo $errorEmail; ?>";

    if(errorEmpty==true){
        $("#mail-name, #mail-email, #mail-message").addClass("input-error");
    }
    if(errorEmail==true){
        $("#mail-email").addClass("input-error");
    }
    if(errorEmpty == false && errorEmail == false){
        $("#mail-name, #mail-email, #mail-message").val("");
    }
</script>