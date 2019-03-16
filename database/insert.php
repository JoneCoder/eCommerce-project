<?php
  function db_insert($tableName,$fields,$values)
  {
    require " /*This field database connection file name*/";
    echo $fields."<br>";
    echo $values."<br>";
    $query = "INSERT INTO $tableName ($fields) VALUES ($values)";
    echo $query;
    $ins=mysqli_query($conn,$query);
    if($ins)
    {
      return 1;
    }
    else {
      return 0;
    }
  }
 ?>
