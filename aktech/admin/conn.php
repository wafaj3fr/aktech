
 <?php

 // include("config.php");
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "aktech1";
 // Create connection
 $conn = new mysqli($servername, $username, $password ,$dbname );
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 else 
 {
 $conn->set_charset("utf8");

//  echo "Admin Connected successfully";   
 
 mysqli_query($conn, "SET NAMES 'utf8'"); 
//  session_start();
 /////////
 // //  session_start();
//  userid	username	useremail	password1	password2	privilege	
 
 /////////
 // echo $_SESSION["user_login"];
 if(isset($_POST['login']))
 {
 
     $user_login_name=$_POST["U_email"];
     $pass=$_POST["U_pass"];
//  userid	username	useremail	password1	password2	privilege	

     $sql_user="Select * FROM admin WHERE 	usrename='$user_login_name'";
     $result_user=$conn->query($sql_user);
     $row = $result_user->fetch_assoc();
     // echo "goooooo";
 
           if($conn->query($sql_user)==TRUE){
 // if( $user_login_name== "ib")
           session_start();
           $_SESSION["user_login"] = $user_login_name;	
         if($row["usrename"] == $user_login_name && $row["password"] == $pass)
         {
 
             echo ("<script language='JavaScript'>window.location.href='all.php';</script>");
   
    //  if($row["privilege"] == "1")
    //  header('Location: dp/admin/');
    //  else if($row["privilege"] == "2")
    //  header('Location: dp/');
     // header('Location: http://localhost/AdminLTE/pages/tables/req_watch_adver.php');
            //  else if($row["privilege"] == "admin")
            //  header('Location: dp/');
         }
         else {

             echo "<script type='text/javascript'>alert('incorrect Username Or Password');</script>";
         }
   }
 }
}
 ?>