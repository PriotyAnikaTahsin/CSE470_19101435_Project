 <?php   
 include 'conn.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `policetable` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:PoliceList');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  