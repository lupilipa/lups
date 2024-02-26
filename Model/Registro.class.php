<?php



class Registro{

    public function cadastrarRegistro($motivo, $aluno, $turma, $ano){
        $pdo = new PDO("mysql:host=localhost;dbname=registro_atraso","root","");
        $consulta = "INSERT INTO registro VALUES (null,:motivo,curdate(),:id_aluno,:id_usuario)";
        $consultar = $pdo->prepare($consulta);
        $consultar->bindValue(":motivo", $motivo);
        $consultar->bindValue(":id_aluno", $id_aluno);
        $consultar->bindValue(":id_usuario", $id_usuario);
        $consultar->execute();
    
    }


}

?>