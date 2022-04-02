<!-- Implement the following web application -

i. A user validation web application, where the user submits the login name and password to the server. The name and password are checked against the data already available in the database and if the data matches, a successful login page is returned. Otherwise a failure message is shown to the user. 

ii. Modify the above program to use an XML file instead of database-->

<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login Successful </center></h1>";  
        }  
        else{  
            echo "<h1> <center>Login failed. Invalid username or password </center></h1>";  
        }     
?>  