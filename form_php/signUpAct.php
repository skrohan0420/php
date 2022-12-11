<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    include "./conn.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = md5($_POST['password']);
    $course = implode(',',$_POST['course']);   
    $uploadfile = $_FILES['image']['name'];



    if (move_uploaded_file($_FILES['image']['tmp_name'], './uploads/'.$uploadfile)){
        echo "File successfully uploaded.\n";
    }
    else {
        echo "file not Uploaded\n";
    }
    
    $file = 'uploads/' . basename($_FILES['image']['name']);
   

    $sql = "INSERT INTO 
                `user_data` (`id`, `name`, `email`, `dob`, `password`, `gender`, `course`, `image`) 
            VALUES 
                (NULL,'$name','$email','$dob','$password','$gender','$course','$file')";



    if(mysqli_query($conn, $sql)){
        header('Location: view.php');
    }else{
        echo "data not inserted";
    }




?>