<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>User List</title>
</head>
<body>

<div class="container">
    <div class="row">
        <h1>Kullanıcılar</h1>
        <?php foreach($data as $key => $value): ?>
            <div class="col-md-4">
             <div class="card">
               <div class="card">
                   <div class="card-header"><?= $value['isim'] ?></div>
                   <div class="card-body"><?= $value['eposta'] ?></div>
               </div>
           </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>