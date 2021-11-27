<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | Beranda</title>
    <style>
        body{
        font-family: Hobo STD;
        font-weight: bold;
        background:#206A5D;
        }
        .latarbelakang{
            position: absolute;
            width: 1200px;
            height: 560px;
            left: 80px;
            top: -105px;
            z-index: -1;
            background: #F58634;
            border-radius: 100px;
            border: 5px solid black; 
        }
        .nama{
            font-size: 40px;
            padding: 20px;
            background: #FFCC29;
            border: 5px solid black; 
            border-radius: 30px;
            margin: 20px 15px 0px 15px; 
        }
        .menu{
            margin: 20px auto 50px 400px;
            width: 500px;
            background-color:  #81B214;
            border: 5px solid black; 
            border-radius: 30px;
        }
        .menu a{
            margin: 5px auto 5px 32px;
            padding-right: 20px; 
            text-decoration: none; 
            font-size: 25px; 
            color: black; 
            display: block;
            line-height: 50px; 
        }
        .menu a:hover{
            color: antiquewhite; 
        }
        img{
            width:800px;
            height:auto;
            display:block;
            margin:auto;
            margin-bottom:20px;
            border: 5px solid black; 
            border-radius: 50px;
            line-height: 20px;
        }
    </style>
</head>
<body>
    <div class="latarbelakang"></div>
    <div class="container">
        <header>
            <div class="nama">
                HealtyMart.
            </div>
            <div class="menu">
                <table>
                    <tr>
                        <td><a href="beranda.php">BERANDA</a></td>
                        <td><a href="pasar.php">PASAR</a></td>
                        <td><a href="login.php">LOGOUT</a></td>
                    </tr>
                </table>
            </div>
        </header>
        <article>
            <img src="beranda.png" alt="gambar ucapan">
        </article>
</body>
</html>