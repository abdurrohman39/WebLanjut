<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>News | Internasional</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

    

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Berita<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="services.php">Daerah</a></li>
                                <li><a href="pricing.php">Nasional</a></li>
                                <li><a href="blog-item.php">Internasional</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.php">Video </a></li>
                        <li><a href="download.php">Download </a></li>
                        
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->

    <div class="teks">
					<p><h1><b><marquee>News - Internasional</marquee></b></h1></p>
						 </div>

    <div>
   <img src="images/unimusbg.jpeg" style="width:100%; height:100%;">
      
    </div>
    <div class="teks">
					<p><h1><b><u><center>News - Internasional</center></u></b></h1></p>
						 </div>


   <?php
        //Data mentah yang ditampilkan ke tabel
        include "koneksi.php";    
       $sql = mysql_query("SELECT * FROM tb_berita where kategori= 'Terpopuler' ");
       $no = 1;
       while ($r = mysql_fetch_array($sql)) {
        $id_berita = $r['id_berita'];
        $a=$r['nama_berita'];
        $b=$r['tanggal_upload'];
        $c=$r['isi_berita'];
        $e=$r['nama_penulis'];
        $read = substr($c,0,300);
        ?>
            <h4 class="normal m-b-10"><?=$a;?><br><h4><?=$b;?>/<?=$e;?></h4></h4>
            <span><?php echo $read ;?></span>
              <?php } ?>
   

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
