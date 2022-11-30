<?
header ("Acess-control-Allow- Origin: *"0);
header("Acess-Control-Allow-Headrs: *");

include 'conexao.php';

$id = rand (1, 999)
$nome = $_POST ["nome"];
$email = $_POST ['"email'];
$cometario = $_POST["comentario"];

$query = "INSERT INTO mesagens (id, nome, email, comentario) VALUES ('$id', '$nome', '$email', '$comentario')"

if ( $lnk ->query($query) ===true) {
    echo "New Record Created successfully";
} else {
    echo "error:"". $link ->error;
}
?>
