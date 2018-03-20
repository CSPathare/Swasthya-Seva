 <?php
        session_start();
      require_once "dbcon.php";

          $dbconn=  mysqli_query($dbconn, "select * from patients");
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Swasthya-seva</title>
  <link rel="stylesheet" type="text/css" href="bootstrap\3.3.6\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  table, th, td {
    border: 2px solid black;
}
th{
  padding-left: 15px;
  padding-right: 15px;
  align-items: center;
}
</style>
<body id="test">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SWASTHYA-SEVA&nbsp:&nbsp<?php print($_SESSION['village']);?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a onclick="openNav()" style="cursor: pointer;">MENU</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding-top: 15px;"><?php echo $_SESSION['name'];?>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" style="padding-top: 8px;">
  
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="container-fluid text-center" style="background-color: #fff;padding-top: 7%;padding-bottom: 7%;background-image: url(tempimgs/hb.jpg);
    background-size: 100% 111%;">
  <h1 style="font-size: 55px;letter-spacing: 90px; font-family: -webkit-body; color: #043606">SWASTHYA-SEVA</h1>
  <br>
  <p style="font-size: 25px;font-family: -webkit-body;
    letter-spacing: 9px; color: #fff">"Government of Rajasthan Portal initiative"</p>
</div>

<div class="container-fluid text-center tab" >
  <div class="col-md-12">
    <br><br>
          <td style="border: 2px solid black"><b style="font-size: 30px">List of Patients</b></td></br>
          <table style="margin-left: 16%; margin-bottom: 40px;  font-size: 20px">
            <br><br>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Mobile</th>
                   <th>Email</th>
                  <th>Blood Group</th>
                  <th>Weight</th>
                  <th>Remarks</th>
                  <th>Treatment</th>
          </tr>

      <?php

           while($row=  mysqli_fetch_array($dbconn))

           {
               ?>
          <tr style="border: 2px solid black">
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['mobile'] ;?></td>
              <td><?php echo $row['email'] ;?></td>
              <td><?php echo $row['bg'] ;?></td>
              <td><?php echo $row['weight'] ;?></td>
              <td><?php echo $row['remarks'] ;?></td>
              <td><?php if($row['treat'] == 0)echo "<strong>Awaited</strong>" ; else echo "Done" ;?></td>
          </tr>
      <?php
           }
           ?>
           </table>
           </div>

           <br>
<?php session_start(); if($_SESSION['doctor'] == 1) echo '<input type="button" value=" View Pateint" onclick="location.href='.'"treatment.php"">';
      ?></div>
<div id="mySidenav" class="sidenav" style="box-shadow: 6px 8px 31px black">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="
    color: #000;
    padding-top: 46px;
    padding-right: 5px;
    text-decoration: none;
">&times;</a>
    <img src="tempimgs/ki.jpg" class="cik">
     <ul class="u">
  <li class="active l">
 <span class="glyphicon glyphicon-home"></span><a href="index.php"><i class="fa fa-fw fa-dashboard"></i>Home</a>
 </li>
   <li class="active l">
 <span class="glyphicon glyphicon-off"></span><a href="logout.php"><i class="fa fa-fw fa-dashboard"></i> Log out</a>
 </li>
  </ul>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="margin-left:-76px;width: 133%">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>ADD PATIENT</h4>
      </div>
      <div class="modal-body">
        <div class="container" style="width: inherit;">
          <div class="row">
          <form action="nurse.php" method="post"  enctype="multipart/form-data">
            <div cl>
            <div class="col-md-12">
          <div class="form-group">
          <input type="textarea" name="name" id="name" class="form-control frm1" required="" placeholder="Patient Name" />
          </div>
          <div class="form-group">
          <input type="textarea" name="age" id="age" class="form-control frm1" placeholder="age" />
          </div>
          <div class="form-group">
          <input type="textarea" name="mobile" id="name" class="form-control frm1" required="" placeholder="Mobile No." />
          </div>
          <div class="form-group">
          <input type="textarea" name="email" id="age" class="form-control frm1" placeholder="E-Mail" />
          </div>
          <div class="form-group">
          <input type="textarea" name="bg" id="age" class="form-control frm1" placeholder="Blood-Group" />
          </div>
          <div class="form-group">
          <input type="textarea" name="weight" id="age" class="form-control frm1" placeholder="Weight" />
          </div>
          <div class="form-group">
          <label class="custom-file-upload">
      <input type="file" name="datafile"  id="imgInp" />
       Reports  Upload
    </label>
          </div>
          <div class="form-group">
          <input type="textarea" name="remarks" id="age" class="form-control frm1" placeholder="Remarks" />
          </div>
          <div class="form-group">
          <button type="submit" name="add" value="ADD" class="btn" style="height: 37px;
    padding-top: 7px;background-color: #051019;
    border-radius: 0px;">add</button>
          </div>
            </div>
          </div>
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default pull-left" data-dismiss="modal" style="
    background-color: #051019;
    border: 0;
">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
        <p style="color: #fff">Need<a href="#">help?</a></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "350px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<script src="js/SmoothScroll.js"></script>
<script src="js/jarallax.js"></script>
</body>
</html>
