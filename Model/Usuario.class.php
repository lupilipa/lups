<?php



class Usuario{

    public function cadastrarUsuario($tipo, $email, $senha){
        $pdo = new PDO("mysql:host=localhost;dbname=registro_atraso","root","");
        $consulta = "INSERT INTO usuario VALUES (null,:tipo,:email,:senha)";
        $consultar = $pdo->prepare($consulta);
        $consultar->bindValue(":tipo", $tipo);
        $consultar->bindValue(":email", $email);
        $consultar->bindValue(":senha", $senha);
        $consultar->execute();
    }






public function listarUsuario(){
    $pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
    $consulta = "select * from usuario order by tipo, email;";
    $consultafeita = $pdo->prepare($consulta);
    $consultafeita->execute();
        echo '<center>
        <table border=1>
        <tr>
            <th colspan=2>
            Relatório de Usuários
            </th>
            </tr>
        <tr>
            <th>Email</th>
            <th>Tipo</th>                           
        </tr>'
        ;

    foreach ($consultafeita as $value) {
       echo '<tr><td>'.$value['email'] .'</td>';
       echo  '<td>'.$value['tipo'] .'</tr></td>' ;
    }
    echo '</table></center>';
}

}












?>