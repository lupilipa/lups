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

    <form action="../Control/controleUsuario.php" method="POST">

        <select name="tipo">
            <option value="admin">Admin</option>
            <option value="professor">Prof</option>
            <option value="aluno">Aluno</option>
        </select><br>

        <input type="email" name="email" placeholder="Digite seu email..."> <br>

        <input type="password" name="senha" placeholder="Digite sua senha..."> <br>
        
        <input type="submit" name="cadastrar_usuario" value="Cadastrar">



    
    
    </form>

</center>

</body>
</html>