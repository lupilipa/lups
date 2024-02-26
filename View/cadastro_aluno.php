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
    input#nome{
        width: 150px;
    }
    input#btn{
        height: 30px;
        width: 202px;
        background: green;
        border-radius: 4px;
    }
    
    
    
    
    
    </style>
</head>
<body>
    

<center>

    <form action="../Control/controleAluno.php" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome..."> <br>

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

        <input type="submit" id="btn" name="cadastrar_aluno" value="Cadastrar">


    
    
    </form>

</center>

</body>
</html>