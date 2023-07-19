<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="8.jpg" type="image/x-icon">
    <!-- font poppins -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../Praktikum/UTS/transisi.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>

    * {margin:0; padding:0;}
     
    body {
    background-image: url("a7.jpg");
     background-color:#fff;
     font-family:Arial, Helvetica, sans-serif;
     color:#000;
    }

    nav {
     margin:auto;
     text-align: center;
     width: 100%;
    } 

    nav ul ul {
     display: none;
    }

    nav ul li:hover > ul{
    display: block;
    width: 150px;
    }

    nav ul {
     background: #53bd84;
     padding: 0 20px;
     list-style: none;
     position: relative;
     display: inline-table;
     width: 100%;
    }

    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }

    nav ul li{
     float:left;
    }

    nav ul li:hover{
     background:#666;
    }

    nav ul li:hover a{
     color:#fff;
    }

    nav ul li a{
     display: block;
     padding: 25px;
     color: #fff;
     text-decoration: none;
    }

    nav ul ul{
     background: #53bd84;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 1px soild #53bd84;
     border-bottom: 1px solid #53bd84;
     position: relative;
    }

    nav ul ul li a{
     padding: 15px 40px;
     color: #fff;
    }

    nav ul ul li a:hover{
     background-color: #666;
    }

    nav ul ul ul{
     position: absolute;
     left: 100%;
     top: 0;
    }
    
    </style>
</head>
<body>

<h1 class="text-center fw-bold mb-2 py-5 text-red">BINJAI GOKIL</h1><br>
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 py-5">
<div class="col">
 <div class="card h-100">
    <img src="d1.jpg" class="card-img-top"  width="250px" height="250px"
       class="img-fluid">
        <div class="card-body">
       <a href="penduduk.php"><h5 class="card-title">Informasi Penduduk</h5></a>
    </div>
   </div>
</div>
<div class="col">
<div class="card h-100">
<img src="a6.jpg" class="card-img-top" alt="..." width="250px" height="250px"
 class="img-fluid">
<div class="card-body">
<a href="wisata.php"><h5 class="card-title">Object Wisata</h5></a>
</div>
</div>
</div>
<div class="col">
<div class="card h-100">
<img src="a1.jpg" class="card-img-top" alt="..." width="250px" height="250px"
 class="img-fluid">
<div class="card-body">
<a href="utama.php"><h5 class="card-title">Data Penghasilan Utama</h5></a>
</div>
</div>
</div>
</div> 
</div>  

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">BINJAI JAYA</a>
        </div>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
  </body>
</html>