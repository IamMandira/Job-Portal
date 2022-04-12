
<?php include 'header.php'?>
<?php include 'config2.php'?>
<!-- Page content -->
<div class="content">
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </a>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="config2.php" method="post"> 
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="Company_Name" name="cname">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="Job Description" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="Job_Description" name="jdes">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="ctc">
  </div>
  
  <button type="submit" class="btn btn-primary" name="job" >Submit</button>
</form>
  </div>
</div>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql2="SELECT cname,pos,jdes,ctc FROM jobpost";
    $result=mysqli_query($conn, $sql2);
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){

        echo "<tr>
        <td>".$rows['cname']."</td>
              <td>".$rows['pos']."</td>
              <td>".$rows['jdes']."</td>
              <td>".$rows['ctc']."</td>
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

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>