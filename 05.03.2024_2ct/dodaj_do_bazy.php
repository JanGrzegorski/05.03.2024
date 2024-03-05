<?php
include_once("polaczenie.php");
if(isset($_POST['imie'])&& isset( $_POST['nazwisko'] )&& isset( $_POST['email'])){


$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];

echo "$imie, $nazwisko,$email";
    $dodaj_do_bazy = "INSERT INTO uczniowie(imie,nazwisko,email) values('$imie','$nazwisko','$email')";  
     if($polaczenie->exec($dodaj_do_bazy)){
        echo("Dodano do bazy danych...");
        header("Refresh:3; url=index.php");
}else{
    echo "co kukosz chopie";
    header("Refresh:3; url=index.php");
     }
    header("Location:index.php");

}else{
    echo "co kukosz chopie";
    header("Refresh:3; url=index.php");
}
?>
<?php $polaczenie=null; ?>