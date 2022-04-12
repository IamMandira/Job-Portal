<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("Connection failed:");

}
echo "";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql= "INSERT INTO user  VALUES('$name','$email','$phone_no','$password')";
    if(mysqli_query($conn,$sql)){
        echo "Records inserted succesfully";
        header("Location: index.php");
        
    }
    else{
        echo "Could not able to execute $sql." .mysqli_error($conn);
    }
}

   session_start();
   if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    // to prevent from mysqliinjection
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    
    
    


    $query="SELECT * FROM user WHERE 'email'='$email' AND 'password'='$password'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if(mysqli_num_rows($result)==1)
    {
       
     
        echo"login successful";
       
    }
    else{

        echo"incorrect";
    }
}

    if(isset($_POST['job'])){
        $cname=$_POST['cname'];
        $pos=$_POST['pos'];
        $jdes=$_POST['jdes'];
        $ctc=$_POST['ctc'];
    
        $sql= "INSERT INTO jobpost  VALUES('$cname','$pos','$jdes','$ctc')";
        if(mysqli_query($conn,$sql)){
            echo "Records inserted succesfully";
            
        }
        else{
            echo "Could not able to execute $sql2." .mysqli_error($conn);
        }
    }
    if(isset($_POST['apply'])){
        $can_name=$_POST['name'];
        $applying_for=$_POST['applying_for'];
        $qualification=$_POST['qualification'];
        $year_passout=$_POST['year_passout'];
        $sql= "INSERT INTO candidate_data  VALUES('$can_name','$applying_for','$qualification','$year_passout')";
        if(mysqli_query($conn,$sql)){
            echo "Records inserted succesfully";
            
        }
        else{
            echo "Could not able to execute $sql." .mysqli_error($conn);
        }
    }
       
            
    
    

?>
