<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealtyMart | LOGIN</title>
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
            <h1>Log in</h1>
            <h2>Username</h2>
            <input type="text" name="nama" required="username" placeholder="Masukan username Anda"><br>
            <h2>Password</h2>
            <input type="password" name="pass" placeholder="Masukan password Anda" required/><br>
            
            <input class="ini" type = "submit" value="Login" name="login">
            
            <div class="footer-list">
            <p>Belum punya akun?</p>
            <ul>
                <li><a href="daftar.php"><u>Daftar</u></a></li>
            </ul>
            </div>
                <input class="ini" type="reset" value= "Clear answer"><br><br>

            </form>
            <?php 
                if(isset($_POST['login'])){
                    include 'koneksi.php';
                    $cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE nama = '".$_POST['nama']."' AND
                        password = '".$_POST['pass']."'");
                    $row = mysqli_fetch_array($cek);
                    $count = mysqli_num_rows($cek);

                    if($count>0){
                        session_start();
                        $_SESSION['nama']=$row['nama'];
                        $_SESSION['telepon']=$row['telepon'];            
                        $_SESSION['email']=$row['email'];

                        header('location:beranda.php');
                    }else{
                        die('<script>alert("Username dan Email salah!")</script>');
                    }
                }
            ?>
            </div>
        </article>
</body>
</html>