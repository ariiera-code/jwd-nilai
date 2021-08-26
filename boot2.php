<?php
session_start();

if($_SESSION['username']=='' || $_SESSION['level']!='2')
{
    ?>
    <script language="JavaScript">
        document.location='index.php';          
    </script>
    <?php
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Layout 2 Kolom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</head>

<body>

    <header class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">Login Level 2</h1>
                <p class="lead">Panduan Belajar Bootstrap untuk Pemula</p>
            </div>
        </div>
    </header>

    <main class="container border">
        <div class="row">
            <div class="col-8 py-5">
                <p><?php echo $_SESSION['username']?></p>
                <p><?php echo $_SESSION['level']?></p>
                <p><a class="btn btn-danger btn-md" href="logout.php" role="button"> Logout</a></p>
                <h1>Membuat Layout Satu Kolom</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus
                    sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione
                    ipsam facere quod?</p>
            </div>
            <div class="col-4 py-5">
                <h1>Membuat Layout Satu Kolom</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad reprehenderit libero unde ullam ducimus
                    sunt, saepe fugit animi accusamus accusantium excepturi corrupti aut tenetur? Cumque quasi ratione
                    ipsam facere quod?</p>
            </div>
        </div>
    </main>

    <footer class="container bg-light">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2021 Tutorial Bootstrap
            </div>
        </div>
    </footer>

</body>
</html>
<?php
}
?>