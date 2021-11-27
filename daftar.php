<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | DAFTAR</title>
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
        .isi{
            background-color: #FFCC29;
            margin: 50px 250px 10px 250px;
            border: 5px solid black; 
            border-radius: 50px;
            line-height: 20px;
            margin-bottom: 30px;
        }
        .isi h1{
            font-size: 50px;
            text-align: center;
            padding-bottom: 20px;
        }
        .isi form h2{
            font-size: 25px;
            margin-left: 30px;
        }
        .isi form input{
            background-color: #F58634;
            border: 5px solid black; 
            border-radius: 50px;
            margin-left: 30px;
            margin-bottom: 20px;
            font-family: Hobo STD;
        }
        .isi form input[type="text"]{
            width: 400px;
            height: 30px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .isi form input[type="password"]{
            width: 400px;
            height: 30px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .isi form input[type="submit"]{
            width: 100px;
            height: 50px;
            font-size: 20px;
        }
        .isi form input[type="submit"]:hover{
            background-color: #FFCC29;
        }
        .isi form input[type="reset"]{
            width: 150px;
            height: 50px;
            font-size: 20px;
        }
        .isi form input[type="reset"]:hover{
            background-color: #FFCC29;
        }
        .footer-list p{
            font-size:20px;
            margin-left:30px;
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
        </header>
        <article>
            <div class="isi">
                <form action="" method="post">
                <h1>Sign up</h1>
                <h2>Username</h2>
                <input type="text" name="nama" required="username" placeholder="Masukan username Anda"><br>
                <h2>No.Telepon</h2>
                <input type="text" name="telepon" required="telepon" placeholder="Masukan nomor(aktif) Anda"><br>
                <h2>Email</h2>
                <input type="text" name="email" required="email" placeholder="Masukan email Anda"></br>
                <h2>Password</h2>
                <input type="password" name="pass" placeholder="Masukan password Anda" required/><br>
                
                <input class="ini" type = "submit" value="Daftar" name="daftar">
                <div class="footer-list">
                <p>Sudah punya akun?</p>
                <ul>
                    <li><a href="login.php"><u>Log in</u></a></li>
                </ul>
                </div>
                    <input class="ini" type="reset" value= "Clear answer"><br><br>
                </form>
            </div>
            <?php 
            if(isset($_POST['daftar'])){
                include 'koneksi.php';
                $insert = mysqli_query($conn, "INSERT INTO tb_user VALUES 
                    (NULL,
                        '".$_POST['nama']."',
                        '".$_POST['telepon']."',
                        '".$_POST['email']."',
                        '".$_POST['pass']."')");

                    if($insert){
                        header('location:login.php');
                    }else{
                        echo 'gagal';
                    }
            }

                
            ?>
        </article>
</body>
</html>