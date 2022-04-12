<?php include 'header.php'?>
<?php include 'config2.php'?>
<div class="content">
<table class="table" >
  <thead>
    <tr>
      
      <th scope="col">Candidate Name</th>
      <th scope="col">Applying_for</th>
      <th scope="col">Qualification</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <tbody><?php
    $sql2="SELECT can_name,applying_for,qualification,year_passout FROM candidate_data";
    $result=mysqli_query($conn, $sql2);
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){

        echo "<tr>
        <td>".$rows['can_name']."</td>
              <td>".$rows['applying_for']."</td>
              <td>".$rows['qualification']."</td>
              <td>".$rows['year_passout']."</td>
              </tr>";
      }
    }
    else
    {
      echo "";
    }
    
    ?>
    
     
  </tbody>
</table>
</div>