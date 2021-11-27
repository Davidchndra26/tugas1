<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | KeranjangSayur</title>
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
        .pilihan{
            margin-top:50px;
            margin-bottom:20px;
            border: 5px solid black;  
            border-radius: 20px;
            background-color:#FFCC29;
            width:800px;
            height:800px;
            margin-left:243px;
            padding:20px;
        }
        .pilihan h1{
            color: black;
            text-align: center;
            font-size: 35px;
            padding-top: 15px;
        }
        .pilihan p{
            margin-left: 20px;
        }
        .pilihan h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="latarbelakang"></div>
    <div class="container">
        <header>
            <div class="nama">
                KERANJANG.
            </div>
            <div class="menu">
                <table>
                    <tr>
                        <td><a href="sayur.php">BACK</a></td>
                    </tr>
                </table>
            </div>
        </header>
        <article>
            <div class="pilihan">
                <h1>SAYUR </h1>
                <p>BAYAM
                    <br>
                    <?php
                    $Jumlah1=$_POST["jumlahbayam"];
                    $total1=$Jumlah1*3000;
                    echo $Jumlah1.'IKAT';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total1;
                    ?>
                </p>
                <p>KANGKUNG
                    <br>
                    <?php
                    $Jumlah2=$_POST["jumlahkangkung"];
                    $total2=$Jumlah2*3000;
                    echo $Jumlah2.'IKAT';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total2;
                    ?>
                </p>
                <p>BROKOLI
                    <br>
                    <?php
                    $Jumlah3=$_POST["jumlahbrokoli"];
                    $total3=$Jumlah3*20000;
                    echo $Jumlah3.' KG';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total3;
                    ?>
                </p>
                <p>SAWI
                    <br>
                    <?php
                    $Jumlah4=$_POST["jumlahsawi"];
                    $total4=$Jumlah4*5000;
                    echo $Jumlah4.'KG';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total4;
                    ?>
                </p>
                <h2>--PAKET--</h2>
                <p>PAKET 1
                    <br>
                    <?php
                    $Jumlah5=$_POST["jumlahpaket1"];
                    $total5=$Jumlah5*8000;
                    echo $Jumlah5.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total5;
                    ?>
                </p>
                <p>PAKET 2
                    <br>
                    <?php
                    $Jumlah6=$_POST["jumlahpaket2"];
                    $total6=$Jumlah6*15000;
                    echo $Jumlah6.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total6;
                    ?>
                </p>
                <p>PAKET 3
                    <br>
                    <?php
                    $Jumlah7=$_POST["jumlahpaket3"];
                    $total7=$Jumlah7*30000;
                    echo $Jumlah7.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total7;
                    ?>
                </p>
                <p>PAKET 4
                    <br>
                    <?php
                    $Jumlah8=$_POST["jumlahpaket4"];
                    $total8=$Jumlah8*30000;
                    echo $Jumlah8.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total8;
                    ?>
                </p>
                <p>
                    <br>
                    <?php
                    $totalsemua = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8;
                    echo "TOTAL KESELURUHAN : Rp. ". $totalsemua;
                    ?>
                </p>
            </div>
        </article>
</body>
</html>