<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 0px;
  padding: 20px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 400px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 2 2 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>
 
      
              
    <div class="container">
        <nav class="navbar navbar-light bg-dark">
            <h2 style="color: white">Add New Admin</h2>


<div class="">
  <p><?php check_message() ?></p>
  <div class="form">

<?php
include('conn.php');
    $conn = mysqli_connect('localhost' , 'root' , '' , 'minima_db');
    if(isset($_POST['ADMINADD'])){
    $query=mysqli_query($conn,"select * from `adminusers`");
                    while($row=mysqli_fetch_array($query)){
                       
                        
                             echo $row['id']; 
                             echo $row['url_address']; 
                           echo $row['username']; 
                            echo $row['password'];
                             echo $row['email'];
                             echo $row['date'];
                           }
                        }
                            
                        
 ?>

 <form method="POST" action="ADMINADD"> 
   
            <label>id:</label><input type="id" name="id">
            <label>username:</label><input type="character" name="username">
            <label>password:</label><input type="password" name="password">
            <label>email:</label><input type="character" name="email">
             <label>date:</label><input type="date" name="date">
             <button>create</button>
            <p class="message">Back <a href="adminhome">Admin Home Page</a></p>
  


 </form>
  </div>
</div>



<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

$('form').animate({height: "toggle", opacity: "toggle"}, "slow");

</script>