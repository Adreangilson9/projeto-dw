<?php
$id = 1;
$sql = "DELETE FROM dados_formulario WHERE id=$id";
if($conn->query($sql==TRUE)){
    echo "deletado com sucesso";
}else{
    echo"erro".$conn->error

}
?>