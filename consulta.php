<?php
$sql = "SELECT id, nome, usuario, senha, mensagem FROM dados_formulario";
$result->$conn->query($sql);
if ($result - num_rows >0) {
    while($row=
    $result->fetch_assoc()){
        echo "id: ".$row["id"]."
        nome: .$row["nome"]. "
        usuario: .$row["usuario"]
        senha: .$row["senha"]."
    }
}else{
    echo "O resultados"
        


    }

    )
}
