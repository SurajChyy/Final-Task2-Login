<!-- Implement the following web application -

i. A user validation web application, where the user submits the login name and password to the server. The name and password are checked against the data already available in the database and if the data matches, a successful login page is returned. Otherwise a failure message is shown to the user. 

ii. Modify the above program to use an XML file instead of database-->

<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  