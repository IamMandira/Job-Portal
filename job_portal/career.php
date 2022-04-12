
<?php include 'config2.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Career</title>
    <style>
       .upper
{
  padding:50px;
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCUSSNJt5JPRJRbEwA43XFShS-ksus_7_eoQ&usqp=CAU");
  background-size:cover;
}
.container
{
  margin-top:40px;
  box-shadow: 10px 10px 8px #888888;
  padding-left:30px;
  padding-right:30px;
}
      
      </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="upper">
  <h1>Job Portal</h1>
  <span>Best jobs available matching your skills</span>
  
</div>

<div class="row">
<?php
    $sql2="SELECT cname,pos,jdes,ctc FROM jobpost";
    $result=mysqli_query($conn, $sql2);
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){

        echo '
        <div class="col-md-4">
        <div class="jobs">
        <h3 style="text-align:center;">'.$rows['pos'].'</h3>
        <h4 style="text-align:center;">'.$rows['cname'].'</h4>
        <p style="text-align:justify;color:black;"><b>Job description</b>'.$rows['jdes'].'</p>
        <p style="text-align:justify;color:black;"><b>CTC</b>'.$rows['ctc'].'</p>
        </div>
        <button  class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" aria-expanded="false">
        Apply Now</button>
        </div>';
    }
  }
    
    ?>
    

   

<!-- Modal -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <form class="modal-content" method="post" action="config2.php" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Apply for jobs</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
    
  <div class="modal-body" >
      
        
  <div class="xyz">
    <label  class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="xyz">
    <label class="form-label">Applying For</label>
    <input type="text" class="form-control"   name="applying_for">
  </div>
  <div class="xyz">
    <label  class="form-label">Qualification</label>
    <input type="text" class="form-control"  name="qualification" >
  </div>
  <div class="xyz">
    <label  class="form-label">Year Passout</label>
    <input type="text" class="form-control"  name="year_passout">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="apply" >Submit</button>
  </div><!--end of modal footer-->

  </div><!--end of modal body-->


</form>
</div>
</div>


   





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>