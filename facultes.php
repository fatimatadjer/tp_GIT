<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facult&eacute;s</title>
<head>
<meta http-equiv="Content-type" content="charset=utf-8" />
  <meta charset="utf-8">
  <script src="./SweetAlert_files/jquery-2.1.3.min.js"></script>
  <script src="./SweetAlert_files/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="./SweetAlert_files/sweetalert.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="./bootstrap-3.3.7-dist/jquery/jquery.min.js"></script>
  <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href=".\Logo-Univ_Tlemcen.ico" />
<link rel="icon" type="image/png" href=".\Logo-Univ_Tlemcen.png" />
</head>
  <style>
  #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}
  .jumbotron {
      background-color: #d9534f;
      color: #fff;
      padding: 100px 25px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .bg-s1 {
      background-color: #81F7F3;
  }
  .bg-s2 {
      background-color: #BEF781;
  }
  .bg-s3 {
      background-color: #F5D0A9;
  }
  .bg-s4 {
      background-color: #F78181;
  }
  .bg-s5 {
      background-color: #81BEF7;
  }
  .logo-small {
      color: #d9534f;
      font-size: 50px;
  }
  .logo {
      color: #d9534f;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #d9534f;
  }
  .carousel-indicators li {
      border-color: #d9534f;
  }
  .carousel-indicators li.active {
      background-color: #d9534f;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #d9534f;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #d9534f;
      background-color: #fff !important;
      color: #d9534f;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #d9534f !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #d9534f;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #d9534f;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #d9534f !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #d9534f;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  </style>
  <script language="JavaScript" type="text/JavaScript">
// TADJER FATIMA ZOHRA
function test(id){
swal({   title: "Vous \351tre sure?",   
         text: "Supprimer cette Facult\351!",   
		 type: "warning",   
		 showCancelButton: true,   
		 confirmButtonColor: "#DD6B55",   
		 confirmButtonText: "OK,Supprimer",   
		 cancelButtonText: "Anuller",   
		 closeOnConfirm: false,   
		 closeOnCancel: false }, 
function(isConfirm){   
if (isConfirm) {    
           swal(2000,document.location = "supprimer/supp_fac.php?del=" + id );} 
else {     swal("Exite", "voutre facult\351 n'est pas supprimer", "error");   } });
}
</script>
  <?php
// TADJER FATIMA ZOHRA
function affiche_donner_facultes(){
	$id_conn = mysql_connect('localhost','root','');
	if(!$id_conn){
	exit("impossible de seconnecter au serveur !!!");
}
    if(!mysql_select_db('p_examen')){
	exit("Erreur lors de la sélection de la BDD departements ");
        }
$sql_req = "SELECT * FROM facultes ";
$result = mysql_query($sql_req);
if(mysql_num_rows($result)>0){
 while($ligne=mysql_fetch_assoc($result)){	
	$nouvelle_ligne= "<tr bgcolor=#FFFFCC>"
	."<td height=50 align='center'>".$ligne['id_fac']."</td>"
	."<td align='center'><b class='text-success'>".$ligne['Nom_fac']."</b></td>".
	 "<td align='center'><a href='departement.php?id=".$ligne['id_fac']."'><img src='images/liste2.png'></a></td>
	  <td align='center'><a href='salle.php?id=".$ligne['id_fac']."'><img src='images/salle1.png' width='32' height='32'></a></td>
	  <td align='center'><a href='modifie/modif_fac.php?id=".$ligne['id_fac']."'><img src='images/modif_autre.png'></a></td>
	  <td align='center'><a onclick='test(".$ligne['id_fac'].");'><img src='images/supp.png'></a></td>
	  </tr>";
echo "$nouvelle_ligne";
}
}
}
?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">
	  <?php echo "<img id='myImg' align='center' style='display: block;margin-left: auto; margin-right: auto;' src='Logo-Univ_Tlemcen.png' alt='Trolltunga, Norway' width='100' height='70'>"?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	    <li><a href=""></a></li>
        <li><a href="#about">FACULT&Eacute;S</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="./deconnexion.php" >D&Eacute;CONNEXION</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Universit&eacute; Abou Bekr Belkaid</h1>
    <p href="#myPage"> Facult&eacute; </p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Rechercher..." required>
    <button type="button" class="btn btn-success glyphicon glyphicon-search"></button>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="container">
    <div class="col-sm-2">
	</div>
    <div class="col-sm-8">
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover table-condensed" bordercolor="#CC0000">
      <tr>
	    <td colspan="1" scope="col" height="30" align='center'>
		   <a href=".\ajouter\ajouter_fac.php " ><img src='images/ajout_autre.png'></a>
		</td>
	  </tr>
      <tr class="danger">
        <td height="50" align='center' class="text-danger"><b>N0</b></td>
        <td align='center' colspan="3" class="text-danger"><b>Facult&eacute;</b></td>
      </tr>
   
     <?php echo affiche_donner_facultes();?>
  </table>
</div>
     </div>
	  <div class="col-sm-2">
	  </div>
</div>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== ""){
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>

