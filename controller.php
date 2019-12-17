<?php
    require_once('lib/conexao_banco.php');
    
    
    
    //Limpa tabela
    
    $query = "DELETE * FROM dCurso";
    
    //Query que fará um select nas tabelas do banco;
    $query = "SELECT app_curso.id AS idCursoAppRehagro, app_curso.nome AS Turma, app_status_curso.nome AS Status, app_gerente.nome AS Gerente, app_area_curso.nome AS Area, app_cidade.nome AS Cidade, app_estado.sigla AS UF, app_curso.vlr_mkt 
           FROM ((((app_curso LEFT JOIN app_gerente ON app_curso.id_gerente_comercial = app_gerente.id) LEFT JOIN app_area_curso 
           ON app_curso.id_area = app_area_curso.id) LEFT JOIN app_cidade ON app_curso.id_cidade = app_cidade.id) 
           LEFT JOIN app_estado ON app_cidade.id_estado = app_estado.id) 
           LEFT JOIN app_status_curso ON app_curso.id_status = app_status_curso.id";
    
    //Envia a conexão e a query para execução
    $select =  mysqli_query($conexao,$query);


     //Query que fará o insert do select executado no banco;      
    $query = "INSERT INTO dCurso ( idCursoAppRehagro, Turma, Status, Gerente, Area, Cidade, UF, vlr_mkt )"; 
    
    //Envia a conexão e a query para execução
    $select =  mysqli_query($conexao,$query);

    
    // Verificando se adicionou
    if($select){
        echo "Dados carregados com sucesso";
    die();
}

?>