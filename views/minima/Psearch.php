<?php

if(isset($_POST['Psearch']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `policetable` WHERE CONCAT(`id`, `name`, `height`, `designation`,`phone_number`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `policetable`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "minima_db");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
