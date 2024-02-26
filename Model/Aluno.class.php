<?php

Class Aluno{

    public function CadastrarAluno($nome, $turma, $ano){
        $pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "INSERT INTO aluno VALUES (null,:nome,:turma,:ano)";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->bindValue(":nome", $nome);
        $consultafeita->bindValue(":turma", $turma);
        $consultafeita->bindValue(":ano", $ano);
        $consultafeita->execute();
       
    }



    public function listarAluno(){
        $pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "select * from aluno order by ano, turma;";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->execute();
            echo '<center>
            <table border=1>
            <tr>
                <th colspan=4>
                Relatório de Alunos
                </th>
                </tr>
            <tr>
                <th>Nome</th>
                <th>Ano</th>                           
                <th>Turma</th>
            </tr>'
            ;

        foreach ($consultafeita as $value) {
           echo '<tr><td>'.$value['nome'] .'</td>';
           echo  '<td>'.$value['turma'].'</td>';
           echo  '<td>'.$value['ano'] .'</tr></td>' ;
        }
        echo '</table></center>';
    }

}

?>