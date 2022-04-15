<?php $this->view("minima/AdminHeader",$data);?>




 <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section-top-padding background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Police List</h1>

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
<th>designation</th>
<th>phone_number</th>
</tr>
<!DOCTYPE html>
<html>



<?php
    $conn = mysqli_connect('localhost' , 'root' , '' , 'minima_db');
    if(isset($_POST['search'])){
        $searchKey =  $_POST['search'];     
        $sql =  "SELECT * 
                FROM policetable
                WHERE id LIKE '%$searchKey%' OR 
                name LIKE '%$searchKey%' OR  
                height LIKE '%$searchKey%' OR 
                designation LIKE '%$searchKey%' OR  
                phone_number LIKE '%$searchKey%'
                ";
    }else{
        $sql = "SELECT * FROM policetable";
    }

    $result = mysqli_query($conn,$sql);
?>  

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-dark">
            <h2 style="color: white">Police Table</h2>
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
                    <td><?php echo $row -> designation ?></td>
                    <td><?php echo $row -> phone_number?></td>
                    
                </tr>
            <?php }?>
        </table>

    </div>
</body>
</html>