<?php 
if (isset($_POST['submit'])) {
	}
$film = $_POST["film"];
echo "<br>";
echo "<h3> genre film yang anda sukai :</h3>";
echo "<br>";
foreach ($film as $nilai) {
	echo "- $nilai";
	echo "<br>";
}
if (isset($_POST['delete'])) {
	unset($film);
}

if (isset($_POST['submit'])) {
	}
$travelling = $_POST["travelling"];
echo "<br>";
echo "<h3> Wisata Yang anda pilih :</h3>";
echo "<br>";
foreach ($travelling as $key => $nilai) {
	echo "- $nilai";
	echo "<br>";
}
if (isset($_POST['delete'])) {
	unset($travelling);
}

?>
<form action="halamanakhir.php">
	<input type="submit" name="delete" value="Hapus">
</form>