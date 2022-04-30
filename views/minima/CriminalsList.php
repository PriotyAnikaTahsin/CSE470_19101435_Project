


<?php $this->view("minima/AdminHeader",$data);?>




 <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section-top-padding background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Criminal List</h1>

<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>name</th>
<th>height</th>
<th>crime</th>
</tr>
<!DOCTYPE html>
<html>



<?php
    $conn = mysqli_connect('localhost' , 'root' , '' , 'minima_db');
    if(isset($_POST['search'])){
        $searchKey =  $_POST['search'];     
        $sql =  "SELECT * 
                FROM criminaltable
                WHERE id LIKE '%$searchKey%' OR 
                name LIKE '%$searchKey%' OR  
                height LIKE '%$searchKey%' OR 
                crime LIKE '%$searchKey%'  
                ";
    }else{
        $sql = "SELECT * FROM criminaltable";
    }

    $result = mysqli_query($conn,$sql);
?>  
     
<?php
include('conn.php');
    $conn = mysqli_connect('localhost' , 'root' , '' , 'minima_db');
    if(isset($_POST['add'])){
    $query=mysqli_query($conn,"select * from `criminaltable`");
                    while($row=mysqli_fetch_array($query)){
                       
                        
                             echo $row['id']; 
                             echo $row['name'];
                            echo $row['crime']; 
                            echo $row['height']; 
                           }
                        }
                            
                        
 ?>

 <?php
include('conn.php');
    $conn = mysqli_connect('localhost' , 'root' , '' , 'minima_db');
    if(isset($_POST['delete'])){
    $query=mysqli_query($conn,"select * from `criminaltable`");
                    while($row=mysqli_fetch_array($query)){
                       
                        
                             echo $row['id']; 
                             echo $row['name'];
                            echo $row['crime']; 
                            echo $row['height']; 
                           }
                        }
                            
                        
 ?>









<body>
    <div class="container">
        <nav class="navbar navbar-light bg-dark">
            <h2 style="color: white">Criminal Database</h2>
            <form class="form-inline" action=""  method="post">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <input class="btn btn-dark my-2 my-sm-0" type="submit" value="Search"></input>
        
            </form>
        </nav>
        


     
        

          <!-- populate table from mysql database --> 


            <?php while($row = mysqli_fetch_object($result)) { ?>
                <tr>
                    <td><?php echo $row -> id ?></td>
                    <td><?php echo $row -> name ?></td>
                    <td><?php echo $row -> height ?></td>
                    <td><?php echo $row -> crime ?></td>
                    
                </tr>
            <?php }?>
        </table>

    </div>
</body>
</html>



<p><body>

   
<form method="POST" action="add"> 
   
            <label>id:</label><input type="id" name="id">
            <label>name:</label><input type="character" name="name">
            <label>height:</label><input type="decimal" name="height">
            <label>crime:</label><input type="varchar" name="crime">
            <input type="submit" value="add"> 
            
  
  </form>
  


 
    <form method="GET" action="delete">
            <label>id:</label><input type="id" name="id">
            
            <input type="submit" value="delete">  
                         
                    </form> 
      
    </div>
    <br>
    <div>
        
        </nav>
