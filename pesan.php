<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | KertasPesanBuah</title>
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
            left: 70px;
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
            margin: 20px auto 50px 400px;
            width: 500px;
            background-color:  #81B214;
            border: 5px solid black; 
            border-radius: 30px;
        }
        .menu a{
            margin: 5px auto 5px 212px;
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
        .pesanan form{
            margin-top:50px;
            margin-bottom:20px;
            border: 5px solid black;  
            border-radius: 20px;
            background-color:#FFCC29;
            width:800px;
            margin-left:243px;
            padding:20px;
            line-height:8px;
        }
        .pesanan form input{
            width: 50px;
            background-color: #81B214;
            border: 5px solid black;  
            border-radius: 20px;
            text-align: center;
            font-family: Hobo STD;
            margin-left: 20px;
        }
        .pesanan p{
            text-align:center;
            font-size:30px;
            text-decoration:underline;
        }
        .pesanan h2{
            font-size:25px;
        }
        .pesanan hr{
            width:90%;
            border:3px solid black;
            margin-top:20px;
            margin-bottom:20px;
        }
        .pesanan form input[type="submit"]{
            width: 200px;
            height: 40px;
            background-color: #F58634;
            border: 5px solid black; 
            border-radius: 20px;
            margin-top:20px;
            margin-bottom: 20px;
            font-family: Hobo STD;
        }
        .pesanan form input[type="submit"]:hover{
            background-color: #FFCC29;
        }
    </style>
</head>
<body>
    <div class="latarbelakang"></div>
    <div class="container">
        <header>
            <div class="nama">
                KertasPesanBuah.
            </div>
            <div class="menu">
                <table>
                    <tr>
                        <td><a href="buah.php">BACK</a></td>
                    </tr>
                </table>
            </div>
        </header>
        <article>
            <div class="pesanan">
                <form action="keranjangbuah.php" method="post">
                    <p>KERTAS PESANAN</p>
                    <br><br><br>
                    <h1>ANGGUR</h1>
                    <h1>Rp. 40000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahanggur" autocomplete="off" value="0" min="0" max="100"> KG
                    <br><br><br>
                    <h1>SEMANGKA</h1>
                    <h1>Rp. 40000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahsemangka" autocomplete="off" value="0" min="0" max="100"> BUAH
                    <br><br><br>
                    <h1>NANAS</h1>
                    <h1>Rp. 10000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahnanas" autocomplete="off" value="0" min="0" max="100"> KG
                    <br><br><br>
                    <h1>MELON</h1>
                    <h1>Rp. 30000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahmelon" autocomplete="off" value="0" min="0" max="100"> BUAH
                    <br><br><br>
                    <h1>PISANG</h1>
                    <h1>Rp. 10000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahpisang" autocomplete="off" value="0" min="0" max="100"> BUAH (3 PCS)
                    <br><br><br>
                    <h1>KELAPA</h1>
                    <h1>Rp. 8000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahkelapa" autocomplete="off" value="0" min="0" max="100"> BUAH
                    <br><br><br>
                    <hr>
                    <br>
                    <h2>PAKET</h2>
                    <br><br><br>
                    <h1>PAKET 1</h1>
                    <h1>Rp. 35000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahpaket1" autocomplete="off" value="0" min="0" max="100"> PAKET
                    <br><br><br>
                    <h1>PAKET 2</h1>
                    <h1>Rp. 25000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahpaket2" autocomplete="off" value="0" min="0" max="100"> PAKET
                    <br><br><br>
                    <h1>PAKET 3</h1>
                    <h1>Rp. 50000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahpaket3" autocomplete="off" value="0" min="0" max="100"> PAKET
                    <br><br><br>
                    <h1>PAKET 4</h1>
                    <h1>Rp. 30000</h1>
                    <h1>Ketikkan jumlah yang akan anda beli</h1>
                    <input type="number" name="jumlahpaket4" autocomplete="off" value="0" min="0" max="100"> PAKET
                    <br><br><br>
                    <input type="submit" value="PESAN">
                </form>
            </div>
        </article>
</body>
</html>