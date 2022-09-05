

<?php  
       $server = "localhost";  
       $username = "root";  
       $password = "";  
       $dbname = "insert";
       $conn = mysqli_connect($server, $username, $password, $dbname);

       if(isset($_POST["submit"])){
        if(!empty($_POST["name"]) && !empty($_POST["password"])) {
            $name = $_POST["name"];
            $password = $_POST["password"];

            $query = "insert into form(name,password) values('$name', '$password')";

            $run = mysqli_query() or die(mysqli_error($conn));

            if($run){
                echo "Form submitted successfully...";
            }
            else {
                echo "Form not submitted...";
            }
        }
        else {
            echo "All fields required...";
        }
       }
?>   