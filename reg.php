<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reg_check.php" method="post">
    Введите фамилию<input type="text" name="famil" id=""><br>
    Введите имя<input type="text" name="name" id=""><br>
    Введите отчество<input type="text" name="father_name" id=""><br>
    Введите дату рождения<input type="date" name="date_of_birth" id=""><br>
    Выберите роль
    <select name="role" id="role_id" onchange="output_textarea()">
        <option value="1">Ученик</option>
        <option value="2">Преподаватель</option>
        <option value="3">Родитель</option>
    </select><br>
    <p id="textar"></p><br>
    Введите почту<input type="email" name="mail"><br>
    Введите пароль<input type="password" name="password"><br>
    Повторите пароль<input type="password" name="password"><br>
    <input type="submit" value="Подтвердить">
    <input type="reset">
</form>
</body>
    <script src="/scripts/script_auth.js"></script>
</html>