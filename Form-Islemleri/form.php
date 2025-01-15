<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>

<form action="request.php?islem=ekle" method="post">

    <input type="text" name="isim" placeholder="Isim"><br>
    <input type="text" name="soyisim" placeholder="Soyisim"><br>

    <label>Diller</label><br>
    <label>PHP</label>
    <input type="checkbox" value="php" name="dil[]"><br>
    <label>NODEJS</label>
    <input type="checkbox" value="node" name="dil[]"><br>
    <label>JS</label>
    <input type="checkbox" value="js" name="dil[]"><br>

    <button type="submit"> Gonder </button>
</form>




</body>
</html>