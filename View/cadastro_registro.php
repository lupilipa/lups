<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    form{
        margin-top: 15%;
    }
    select{
        width: 200px;
    }
    input{
        height: 30px;
        width: 202px;
        background: green;
        border-radius: 4px;
    }
    
    
    
    
    
    </style>
</head>
<body>
    

<center>

    <form action="../Control/controleRegistro.php" method="POST">
        <h1>Registro do atraso</h1>
        <select name="ano">
            <option value="1°">1° ANO</option>
            <option value="2°">2° ANO</option>
            <option value="3°">3° ANO</option>
        </select><br>

        <select name="turma">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select><br>

        <select name="aluno">
            <option>COELHO</option>
            <option>JOSUÉ</option>
            <option>JULIA</option>
            <option>NETO</option>
        </select><br>

        <select name="motivo">
            <option>Banheiro</option>
            <option>Pessoal</option>
            <option>Consulta</option>
            <option>Lanche</option>
            <option>Projeto</option>
            <option>Namoro</option>
        </select><br>
         
        <input type="submit" name="cadastrar_registro" value="Cadastrar">


    
    
    </form>

</center>

</body>
</html>