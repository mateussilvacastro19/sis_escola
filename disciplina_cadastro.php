<?php

//-- teste debug para ver conteudo do POST
//echo '<pre>'.print_r($_POST,1).'</pre>';

//-- coletar os dados do formulário POST
$alu_nome   = $_POST['dis_nome'];
$alu_status  = $_POST['dis_status'];
$acao       = $_POST['acao'];

if( $acao == 'SALVAR' ){
    //-- conexao com o banco de dados
    $host   = '127.0.0.1';
    $usuario= 'root';
    $senha  = '';
    $banco  = 'escola';
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);    
    mysqli_set_charset($conexao, "utf8"); // Definir o charset UTF-8

    // Verificar se a conexão foi bem sucedida
    if (mysqli_connect_errno()) {
        die("Falha ao conectar ao MySQL: " . mysqli_connect_error());
    }else{
        //echo 'Conexão OK';
    }

    $sql = "INSERT INTO disciplina (dis_nome, dis_status) 
                  VALUES ('$alu_nome','$alu_status'); ";
    $resultado = mysqli_query($conexao, $sql);

    if( $resultado ){
        echo 'Inserido com sucesso!';
    }else{
        echo 'Erro ao inserir.';
    }

}

?>
