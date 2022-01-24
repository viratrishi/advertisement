<html>
 <head>
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title>Login and Registration</title>
 </head>

 <style>
   input,button{
     width:90%;
   }
   body{
     background-image:linear-gradient(to bottom right,#02aab0,#ef629f);
   }
   body{
   height:100vh;
   background-size:cover;
   background-position:center;
}

.login-page{
  width:360px;
  padding:10% 0 0;
  margin:auto;
}
.form{
  position:relative;
  z-index: 1;
  
  max-width:360px;
  margin: 0 auto 100px;
  padding;45px;
  text-align:center;
}
.form input{
  font-family:"Roboto",sans-serif;
  outline:1;
  background;#f2f2f2;
  width:100%;
  margin:0 0 15px;
  padding:15px;
  box-sizing:border-box;
  font-size:14px;
}
.form button{
  font-family:"Roboto",sans-serif;
  text-transform:uppercase;
  outline:1;
  background:#4CAF50;
  width:100%;
  border:0;
  padding:15px;
  color:#FFFFFF;
  font-size:14px;
  cursor:pointer;
}
.form button:hover , .form button:active{
   background:#000000;
}
.form .message{
   margin:15px 0 0;
   color:white;
   font-size:14px;
}

.form .message a{
   color:#00ffff;
   text-decoration:none;
}
.form .register-form{
   display:none;
}

 </style>

 <body>
 
 <center><label style="font-size:40px;color:#42275a;"><u>USER LOGIN</u></label><br/></center>
   <div class="login-page">
    <div class="form">
      
     <form  class="register-form" method="post" action="index.php">
     
       <input type="text" name="name" required placeholder="Name"/>
       <input type="text" name="uname" required placeholder="User Name" />
       <input type="email" name="email" required placeholder="Email"/>
       <input type="password" name="pwd" required placeholder="Password"/>
       
       <button>Create</button>
       <p class="message"><b>Already Registered?</b><a href="#">Login</a></p>
     </form>
     
     <form  class="login-form" method="post" action="index.php">
     
      <input type="text" name="unamel" required placeholder="User Name"/>
      <input type="password" name="pwdl" required placeholder="Password"/>
      <button>login</button>
      <p class="message"><b>Not Registrated?</b><a href="#">Register</a></p>
    </form>
    </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script>
     $('.message a').click(function(){
     $('form').animate({height:"toggle",opacity:"toggle"},"slow");
     });
   </script>

<?php
 if(isset($_POST['uname']) && isset($_POST['pwd']) && isset($_POST['name']) && isset($_POST['email']))
 {
  $conn=mysqli_connect('localhost','root','','advertisement');
  if (!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

 $sq=mysqli_query($conn,"select count(*) as total from users");
 $data=mysqli_fetch_array($sq);
 $count=$data['total'];
 $u_name=$_POST['uname'];
 $name=$_POST['name'];
 $pass=$_POST['pwd'];
 $email=$_POST['email'];

 $sql="INSERT INTO users(UserId,UserName,Name,Email,Password) VALUES ($count+1,'$u_name','$name','$email','$pass')";
 if (mysqli_query($conn, $sql)) 
 {
 echo '<script>alert("registered successfully!")</script>';
 }
 else
 {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}


else if(isset($_POST['unamel']) && isset($_POST['pwdl']))
{

  $conn=mysqli_connect('localhost','root','','advertisement');
  if (!$conn) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  $u_name=$_POST['unamel'];
  $pass=$_POST['pwdl'];
  $sq="select * from users where username='$u_name' and password='$pass'";
  $data=mysqli_query($conn,$sq);
  $rows=mysqli_num_rows($data);
if($rows>0)
{
  session_start();
  $_SESSION['un']=$u_name;
  
  $url="";
      
      if (!headers_sent())
       {    
        header('Location: '.$url);
        exit;
       }
        else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

else
{
   echo '<script>alert("username or password is incorrect! please register first if you did not...")</script>';
}
}
 ?>
 </body>
</html> 