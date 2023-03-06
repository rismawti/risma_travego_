<?php  
$koneksi = mysqli_connect("localhost", "dumet", "school", "instruktur");
$output = '';
if(isset($_POST["merk_id"])){
	$merk_id = $_POST["merk_id"];
	if($_POST["merk_id"] != ""){
		$sql = "SELECT * FROM tbl_product WHERE brand_id = '$merk_id'";
	}else{
		$sql = "SELECT * FROM tbl_product";
	}
	$result = mysqli_query($koneksi, $sql);
	while ($row = mysqli_fetch_array($result)) {
		$output .= '<div class="col-md-3"><div class="card mt-4"><div class="card-body">'.$row["product_name"].'</div></div></div>';
	}
	echo $output;
}
?>