<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Введите фамилию<input type="text" name="famil" id="">
    Введите имя<input type="text" name="name" id="">
    Введите отчество<input type="text" name="father_name" id="">
    Выберите роль
    <select name="role" id="role_id" onchange="output_textarea()">
        <option value="1">Ученик</option>
        <option value="2">Преподаватель</option>
        <option value="3">Родитель</option>
    </select>
    <p id="textar"></p>
</body>
    <script src="/scripts/script_auth.js"></script>
</html>