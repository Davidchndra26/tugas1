<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | KeranjangBuah</title>
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
            height:950px;
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
                        <td><a href="buah.php">BACK</a></td>
                    </tr>
                </table>
            </div>
        </header>
        <article>
            <div class="pilihan">
                <h1>BUAH</h1>
                <p>ANGGUR
                    <br>
                    <?php
                    $Jumlah1=$_POST["jumlahanggur"];
                    $total1=$Jumlah1*40000;
                    echo $Jumlah1.'KG';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total1;
                    ?>
                </p>
                <p>SEMANGKA
                    <br>
                    <?php
                    $Jumlah2=$_POST["jumlahsemangka"];
                    $total2=$Jumlah2*40000;
                    echo $Jumlah2.'BUAH';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total2;
                    ?>
                </p>
                <p>NANAS
                    <br>
                    <?php
                    $Jumlah3=$_POST["jumlahnanas"];
                    $total3=$Jumlah3*10000;
                    echo $Jumlah3.'KG';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total3;
                    ?>
                </p>
                <p>MELON
                    <br>
                    <?php
                    $Jumlah4=$_POST["jumlahmelon"];
                    $total4=$Jumlah4*30000;
                    echo $Jumlah4.'BUAH';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total4;
                    ?>
                </p>
                <p>PISANG
                    <br>
                    <?php
                    $Jumlah5=$_POST["jumlahpisang"];
                    $total5=$Jumlah5*10000;
                    echo $Jumlah5.'BUAH (3PCS)';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total5;
                    ?>
                </p>
                <p>KELAPA
                    <br>
                    <?php
                    $Jumlah6=$_POST["jumlahkelapa"];
                    $total6=$Jumlah6*8000;
                    echo $Jumlah6.'BUAH';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total6;
                    ?>
                </p>
                <h2>--PAKET--</h2>
                <p>PAKET 1
                    <br>
                    <?php
                    $Jumlah7=$_POST["jumlahpaket1"];
                    $total7=$Jumlah7*35000;
                    echo $Jumlah7.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total7;
                    ?>
                </p>
                <p>PAKET 2
                    <br>
                    <?php
                    $Jumlah8=$_POST["jumlahpaket2"];
                    $total8=$Jumlah8*25000;
                    echo $Jumlah8.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total8;
                    ?>
                </p>
                <p>PAKET 3
                    <br>
                    <?php
                    $Jumlah9=$_POST["jumlahpaket3"];
                    $total9=$Jumlah9*50000;
                    echo $Jumlah9.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total9;
                    ?>
                </p>
                <p>PAKET 4
                    <br>
                    <?php
                    $Jumlah10=$_POST["jumlahpaket4"];
                    $total10=$Jumlah10*30000;
                    echo $Jumlah10.'PAKET';
                    echo "<br>";
                    echo "TOTAL = Rp.".$total10;
                    ?>
                </p>
                <p>
                    <br>
                    <?php
                    $totalsemua = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10;
                    echo "TOTAL KESELURUHAN : Rp. ". $totalsemua;
                    ?>
                </p>
            </div>
        </article>
</body>
</html>