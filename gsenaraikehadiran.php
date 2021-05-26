<?php
  include_once 'gsenaraikehadiran_crud.php';
  //session_start();
?>

 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>SPKKT : Kehadiran</title>
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <link href="css/dataTables.checkboxes.css" rel="stylesheet"/>
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 

    <style>
    body{
        background-image: url(bg.jpg);
      }

 

  .header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
  font-weight: bold; 
}

    </style>

<script type="text/javascript">
  $(document).ready(function(){
    $('.check_box').click(function(){
        var text="";
        $('.check_box:checked').each(function(){
            text+=$(this).val()+ ',';
        });
    });
  });

</script>

</head>

 

<div class="header">
  <h2>SISTEM PENGURUSAN KEHADIRAN KELAS DALAM TALIAN</h2>

 


</div>  
<body>
  <!--navigation bar-->
  <?php include_once 'gnav_bar.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    $("#form1 #select-all").click(function() {

      $("#form1 input[type='checkbox']").prop('checked', this.checked);

    });
  });


</script>

  <?php
  if (isset($_SESSION['status'])) {
    # code...
    echo "<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
  }

  ?>


<form id="form1" action="gsenaraikehadiran_crud.php" method="post">


        <!--tingkatan pelajar -->
      <div class="form-group">
      <label for="tingpel" class="col-sm-1 control-label">Tingkatan</label>

          <div class="col-sm-2">
      <select name="tingkatanpelajar" class="form-control" id="tingpel" >
        <option value="">Sila Pilih</option>
        <option value="1" <?php if(isset($_GET['edit'])) if($editrow['tingkatan_pelajar']=="1") echo "selected"; ?>>1</option>
            <option value="2" <?php if(isset($_GET['edit'])) if($editrow['tingkatan_pelajar']=="2") echo "selected"; ?>>2</option>
            <option value="3" <?php if(isset($_GET['edit'])) if($editrow['tingkatan_pelajar']=="3") echo "selected"; ?>>3</option>
            <option value="4" <?php if(isset($_GET['edit'])) if($editrow['tingkatan_pelajar']=="4") echo "selected"; ?>>4</option>
            <option value="5" <?php if(isset($_GET['edit'])) if($editrow['tingkatan_pelajar']=="5") echo "selected"; ?>>5</option>
      </select> 
      </div>
        </div>


         <!--kelas pelajar-->
      <div class="form-group">
          <label for="kelaspel" class="col-sm-1 control-label">Kelas</label>

          <div class="col-sm-2">
      <select name="kelaspelajar" class="form-control" id="kelpel">
        <option value="">Sila Pilih</option>
        <option value="Adil" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Adil") echo "selected"; ?>>Adil</option>
            <option value="Bestari" <?php if(isset($_GET['
            edit'])) if($editrow['kelas_pelajar']=="Bestari") echo "selected"; ?>>Bestari</option>
            <option value="Cekal" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Cekal") echo "selected"; ?>>Cekal</option>
            <option value="Dinamik" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Dinamik") echo "selected"; ?>>Dinamik</option>
            <option value="Efisyen" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Efisyen") echo "selected"; ?>>Efisyen</option>
            <option value="Fikir" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Fikir") echo "selected"; ?>>Fikir</option>
            <option value="Gigih" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Gigih") echo "selected"; ?>>Gigih</option>
            <option value="Harmoni" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Harmoni") echo "selected"; ?>>Harmoni</option>
            <option value="Ikhlas" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Ikhlas") echo "selected"; ?>>Ikhlas</option>
            <option value="Jujur" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Jujur") echo "selected"; ?>>Jujur</option>
            <option value="Kreatif" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Kreatif") echo "selected"; ?>>Kreatif</option>
            <option value="Lestari" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Lestari") echo "selected"; ?>>Lestari</option>
            <option value="Maju" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Maju") echo "selected"; ?>>Maju</option>
            <option value="Nurani" <?php if(isset($_GET['edit'])) if($editrow['kelas_pelajar']=="Nurani") echo "selected"; ?>>Nurani</option>
      </select> 
      </div>
        </div>


   <div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-onset-1 col-md-10 col-md-onset-1">
      <div class="page-header">
        <h2>Senarai Pelajar</h2>
      </div>
    <table>
    <form method="post">
      <tr>
      <td>Carian</td>
      </tr>
      <tr>
       <td><input id="keyword" name="keyword" class="form-control" type="text" placeholder="Carian.." style="width: 500px;" ></td>

       <td><?php{ ?>
      <button class="btn btn-default" type="submit" name="create" style="float: right; margin: 15px;"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Simpan Kehadiran</button></td>

       </tr>
    </form>
    </table>
    </div>
  </div>

  <br>
  <br>

  
      <table id="mytable" class="table table-striped table-bordered">
    
      <tr>
          <th>ID Pelajar</th>
          <th>Nama</th>
          <th>Tingkatan</th>
          <th>Kelas</th>
          <th>Kehadiran <input type="checkbox" id="select-all" class="check_box" name="check" style="float: right;"></th>
      </tr>

      <?php
      
      $per_page = 40;
      if(isset($_GET['page'])){
        $page = $_GET['page'];
      }
      else{
          $page = 1;
      }
      $start_from = ($page - 1) * $per_page;
      if(isset($_POST['keyword'])){
        $keyword = $_POST['keyword'];
      }
      else if(isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
      }
 
      try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($keyword)){
        $stmt = $conn->prepare("select * from tbl_daftarpelajar_fyp where ic_pelajar like '%$keyword%' or nama_pelajar like '%$keyword%' or tingkatan_pelajar like '%$keyword%' or kelas_pelajar like '%$keyword%' LIMIT $start_from, $per_page");}
        else{
          $stmt = $conn->prepare("SELECT * FROM tbl_daftarpelajar_fyp LIMIT :start_from, :per_page");
          $stmt->bindParam(':start_from', $start_from, PDO::PARAM_INT);
          $stmt->bindParam(':per_page', $per_page, PDO::PARAM_INT);
        }
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?> 
      <tr>
        <td><?php echo $readrow['id_pelajar']; ?></td>
        <td><?php echo $readrow['nama_pelajar']; ?></td>
        <td><?php echo $readrow['tingkatan_pelajar']; ?></td>
        <td><?php echo $readrow['kelas_pelajar']; ?></td>
        <td style="text-align:center;"><input type="checkbox" id="" name="check" class="check_box"> </td>
        
      </tr>
      <?php }  ?>
 
      </table>
      </form>
    </div>
  </div>
 

      <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(isset($keyword)){
            $stmt = $conn->prepare("select * from tbl_daftarpelajar_fyp where ic_pelajar like '%$keyword%' or nama_pelajar like '%$keyword%' or tingkatan_pelajar like '%$keyword%' or kelas_pelajar like '%$keyword%'");}
            else{
              $stmt = $conn->prepare('SELECT * FROM tbl_daftarpelajar_fyp');
            }
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);

          if ($page == 1){ ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else{ 
            if(isset($keyword)){?>
            <li><a href="gsenaraikehadiran.php?page=<?php echo $page - 1;?>&keyword=<?php echo $keyword;?>" aria-label="Kembali"><span aria-hidden="true">«</span></a></li>
            <?php } else{ ?>
            <li><a href="gsenaraikehadiran.php?page=<?php echo $page - 1;?>" aria-label="Kembali"><span aria-hidden="true">«</span></a></li>
            <?php }?>
          <?php }
          for($i = 1; $i <= $total_pages; $i++){
            if($i == $page){
              if(isset($keyword)){
                echo '<li class="active"><a href="gsenaraikehadiran.php?page=' . $i . '&keyword=' . $keyword . '">' . $i . '</a></li>';
              } else{ 
                echo '<li class="active"><a href="gsenaraikehadiran.php?page=' . $i . '">' . $i . '</a></li>';
              }
            }
            else{
              if(isset($keyword)){
                echo '<li><a href="gsenaraikehadiran.php?page=' . $i . '&keyword=' . $keyword . '">' . $i . '</a></li>';
              }
              else{
                echo '<li><a href="gsenaraikehadiran.php?page=' . $i . '">' . $i . '</a></li>';
              }
            }
          }
          if($total_pages == $page){ ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else{ 
            if(isset($keyword)){?>
            <li><a href="gsenaraikehadiran.php?page=<?php echo $page + 1;?>&keyword=<?php echo $keyword;?>" aria-label="Seterusnya"><span aria-hidden="true">»</span></a></li>
            <?php } else{ ?>
            <li><a href="gsenaraikehadiran.php?page=<?php echo $page + 1;?>" aria-label="Seterusnya"><span aria-hidden="true">»</span></a></li>
            <?php } 
          } ?>
        </ul>
      </nav>
    </div> 
</div>

 

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="js/jquery.dataTables.min.js"></script>
    <script type="js/dataTables.checkboxes.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="jquery.tableCheckbox.js"></script>
</body>
</html>