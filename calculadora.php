<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body class="body">
    <div class="main">
        <form name="form">
            <input class="textview" name="textview"><br>
            <table>
                <tr>
                    <td> <input class="button" type="button" value="C" onclick="clean()"> </td>
                    <td> <input class="button" type="button" value="<" onclick="back()"> </td>
                    <td> <input class="button" type="button" value="/" onclick="insert('/')"> </td>
                    <td> <input class="button" type="button" value="*" onclick="insert('*')"> </td>
                </tr>
                <tr>
                    <td> <input class="button" type="button" value="7" onclick="insert(7)"> </td>
                    <td> <input class="button" type="button" value="8" onclick="insert(8)"> </td>
                    <td> <input class="button" type="button" value="9" onclick="insert(9)"> </td>
                    <td> <input class="button" type="button" value="-" onclick="insert('-')"> </td>
                </tr>
                <tr>
                    <td> <input class="button" type="button" value="4" onclick="insert(4)"> </td>
                    <td> <input class="button" type="button" value="5" onclick="insert(5)"> </td>
                    <td> <input class="button" type="button" value="6" onclick="insert(6)"> </td>
                    <td> <input class="button" type="button" value="+" onclick="insert('+')"> </td>
                </tr>
                <tr>
                    <td> <input class="button" type="button" value="1" onclick="insert(1)"> </td>
                    <td> <input class="button" type="button" value="2" onclick="insert(2)"> </td>
                    <td> <input class="button" type="button" value="3" onclick="insert(3)"> </td>
                    <td rowspan=5> <input class="button" style="height: 107px;" type="button" value="=" onclick="equal()"> </td>
                </tr>
                <tr>
                    <td colspan="2"> <input class="button" style="width: 106px;" type="button" value="0" onclick="insert(0)"> </td>
                    <td> <input class="button" type="button" value="." onclick="insert('.')"> </td>
                </tr>
            </table>
        </form>
    </div>

<script src="js/script.js"></script>
</body>
</html>