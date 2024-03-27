<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uni Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM data_admin WHERE id = 1");
	$a = mysqli_fetch_object($kontak);
    ?>
    
	<!-- header -->
	<header class="bg-dark text-white">
    <div class="container">
        <h1><a href="index.php" class="text-white">Uni Store</a></h1>
        <ul class="nav">
            <li class="nav-item"><a href="produk.php" class="nav-link">Produk</a></li>
        </ul>
    </div>
</header>

<!-- search -->
<div class="search bg-light">
    <div class="container">
        <form action="produk.php">
            <input type="text" name="search" class="form-control" placeholder="Cari Produk">
            <input type="submit" name="cari" value="Cari Produk" class="btn btn-primary">
        </form>
    </div>
</div>

<!-- category -->
<div class="section">
    <div class="container">
        <h3 class="text-dark">Kategori</h3>
        <div class="row">
            <?php 
                $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                if(mysqli_num_rows($kategori) > 0){
                    while($k = mysqli_fetch_array($kategori)){
            ?>
                <a href="produk.php?kat=<?php echo $k['category_id'] ?>" class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <img src="images/logokategori.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?php echo $k['category_name'] ?></p>
                        </div>
                    </div>
                </a>
            <?php }}else{ ?>
                <p class="text-muted">Kategori tidak ada</p>
            <?php } ?>
        </div>
    </div>
</div>

<!-- new product -->
<div class="section">
    <div class="container">
        <h3 class="text-dark">Produk Terbaru</h3>
        <div class="row">
            <?php 
                $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
                if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
            ?>    
                <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>" class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3">
                        <img src="produk/<?php echo $p['product_image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title"><?php echo substr($p['product_name'], 0, 30) ?></p>
                            <p class="card-text">Rp. <?php echo number_format($p['product_price']) ?></p>
                        </div>
                    </div>
                </a>
            <?php }}else{ ?>
                <p class="text-muted">Produk tidak ada</p>
            <?php } ?>
        </div>
    </div>
</div>

<!-- footer -->
<div class="footer bg-dark text-white">
    <div class="container">
        <h4>Alamat</h4>
        <p><?php echo $a->admin_address ?></p>

        <h4>Email</h4>
        <p><?php echo $a->admin_email ?></p>

        <h4>No. Hp</h4>
        <p><?php echo $a->admin_telp ?></p>
        <small class="text-muted">Copyright &copy; 2023 - Uni Store</small>
    </div>
</div>
</body>
</html>