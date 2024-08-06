
    <?php
    $arqJason = file_get_contents('sobre.json', true);
    $infos = json_decode($arqJason, true);
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&display=swap');

        html,
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Centraliza verticalmente */
            color: white;
            height: 100vh;
            
        }

        body{
            background: linear-gradient(33rad, red, blue);
        }

       
        .teste{
            font-size: 50px;
            font-family: "Kanit", sans-serif;
            font-weight: 400;
            font-style: italic;
        }
    </style>
</head>

<body>

<div class="teste">
 <?php echo $infos['nome'] . ', que tem ' . $infos['idade'] . ' anos de idade e mora em ' . $infos['cidade']; ?>
</div>

</body>

</html>