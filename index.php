<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurante 1.0</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class= "container">
        <h2>Efetue login</h2>
        <form id="form_login" action="login.php" method="POST">
            <?php if(isset($resultado) && $resultado["msg"] ==0): ?>
            <div class="alert alert-danger">
              <?php  echo $resultado["msg"]; ?>
            </div>
            <?php endif; ?>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" /><br/><br/>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" /><br/>
            <input type="submit" id="submeter" value="Entrar" class="btn btn-primary"/>

        </form>
            </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>