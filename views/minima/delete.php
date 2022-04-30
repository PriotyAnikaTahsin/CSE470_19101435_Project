 


 <?php   
 include 'conn.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `criminaltable` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:CriminalsList');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  