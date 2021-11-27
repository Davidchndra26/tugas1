<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | PASAR</title>
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
            top: -320px;
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
            margin: 20px auto 90px 400px;
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
        .pilihan1{
            float: left;
            width: 400px;
            height: 200px;
            margin-left: 220px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan1 p{
            color: black;
            text-align: center;
            font-size: 35px;
            padding-top: 40px;
        }
        .pilihan1:hover{
            background-color: white;
        }
        .pilihan2{
            float: left;
            width: 400px;
            height: 200px;
            margin-left: 80px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan2 p{
            color: black;
            text-align: center;
            font-size: 35px;
            padding-top: 40px;
        }
        .pilihan2:hover{
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="latarbelakang"></div>
    <div class="container">
        <header>
            <div class="nama">
                PASAR.
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
            <a href="sayur.php">
                <div class="pilihan1">
                    <p>SAYUR</p>
                </div>
            </a>
            <a href="buah.php">
                <div class="pilihan2">
                    <p>BUAH</p>
                </div>
            </a>
        </article>
</body>
</html>