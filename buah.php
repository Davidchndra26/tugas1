<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | Buah</title>
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
            margin: 5px auto 5px 113px;
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
            width: 300px;
            height: 230px;
            margin-top: 20px;
            margin-left: 165px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan1 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan2{
            float: left;
            width: 300px;
            height: 230px;
            margin-top: 20px;
            margin-left: 40px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan2 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan3{
            float: left;
            width: 300px;
            height: 230px;
            margin-top: 20px;
            margin-left: 40px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan3 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan4{
            float: left;
            width: 300px;
            height: 230px;
            margin-top: 20px;
            margin-left: 165px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan4 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan5{
            float: left;
            width: 300px;
            height: 230px;
            margin-top: 20px;
            margin-left: 40px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan5 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan6{
            float: left;
            width: 300px;
            height: 230px;
            margin-top: 20px;
            margin-left: 40px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan6 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihanpaket{
            position: absolute;
            width: 500px;
            height: 50px;
            background-color:#81B214;
            border: 5px solid black;  
            border-radius: 30px;
            margin: 555px auto 20px 400px;
        }
        .pilihanpaket p{
            text-align: center;
        }
        .pilihan7{
            float: left;
            width: 400px;
            height: 300px;
            margin-top: 150px;
            margin-left: 235px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan7 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan7 h1{
            text-align: center;
            margin-left: 20px;
            margin-right: 20px;
            font-size: 18px;
        }
        .pilihan8{
            float: left;
            width: 400px;
            height: 300px;
            margin-top: 150px;
            margin-left: 40px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan8 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan8 h1{
            text-align: center;
            margin-left: 20px;
            margin-right: 20px;
            font-size: 18px;
        }
        .pilihan9{
            float: left;
            width: 400px;
            height: 300px;
            margin-top: 20px;
            margin-left: 235px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
        }
        .pilihan9 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan9 h1{
            text-align: center;
            margin-left: 20px;
            margin-right: 20px;
            font-size: 18px;
        }
        .pilihan10{
            float: left;
            width: 400px;
            height: 300px;
            margin-top: 20px;
            margin-left: 40px;
            background: #FFCC29;
            border: 5px solid black;  
            border-radius: 30px;
            margin-bottom: 20px;
        }
        .pilihan10 p{
            color: black;
            text-align: center;
            font-size: 35px;
        }
        .pilihan10 h1{
            text-align: center;
            margin-left: 20px;
            margin-right: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="latarbelakang"></div>
    <div class="container">
        <header>
            <div class="nama">
                BUAH-BUAHHAN.
            </div>
            <div class="menu">
                <table>
                    <tr>
                        <td><a href="pasar.php">BACK</a></td>
                        <td><a href="pesan.php">PESAN</a></td>
                    </tr>
                </table>
            </div>
        </header>
        <article>
            <div class="pilihan1">
                <p>ANGGUR</p>
                <p>Rp.40000</p>
            </div>
            <div class="pilihan2">
                <p>SEMANGKA</p>
                <p>Rp.40000</p>
            </div>
            <div class="pilihan3">
                <p>NANAS</p>
                <p>Rp.10000</p>
            </div>
            <div class="pilihan4">
                <p>MELON</p>
                <p>Rp.30000</p>
            </div>
            <div class="pilihan5">
                <p>PISANG</p>
                <p>Rp.10000</p>
            </div>
            <div class="pilihan6">
                <p>KELAPA</p>
                <p>Rp.8000</p>
            </div>
            <div class="pilihanpaket">
                <p>PAKET ANTI RIBET</p>
            </div>
            <div class="pilihan7">
                <p>PAKET 1</p>
                <h1>JERUK, PISANG, KIWI, ANGGUR, MELON</h1>
                <p>Rp.35000</p>
            </div>
            <div class="pilihan8">
                <p>PAKET 2</p>
                <h1>APEL, PIR, MANGGA, JAMBU</h1>
                <p>Rp.25000</p>
            </div>
            <div class="pilihan9">
                <p>PAKET 3</p>
                <h1>DURIAN, BUAH NAGA, KEDONDONG, LEMON</h1>
                <p>Rp.50000</p>
            </div>
            <div class="pilihan10">
                <p>PAKET 4</p>
                <h1>KESEMEK, MARKISA, ALPUKAT, LECI</h1>
                <p>Rp.30000</p>
            </div>
        </article>
</body>
</html>