<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM tb_order WHERE status='selesai' AND id='$id'");
$x = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>riwayat</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="riwayat.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.3.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="riwayat">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-c9cd"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <p class="u-custom-font u-text u-text-custom-color-3 u-text-default u-text-1">SEPATOE'S</p>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 400;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="menu.php?id=<?= $id ?>" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="Order.php?id=<?= $id ?>" style="padding: 10px 20px;">Order</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="Layanan.php?id=<?= $id ?>" style="padding: 10px 20px;">Layanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="pesanan.php?id=<?= $id ?>" style="padding: 10px 20px;">Pesanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="riwayat.php?id=<?= $id ?>" style="padding: 10px 20px;">Riwayat</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="riview.php?id=<?= $id ?>" style="padding: 10px 20px;">Review</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-3 u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Log Out</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="menu.php?id=<?= $id ?>">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Order.php?id=<?= $id ?>">Order</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Layanan.php?id=<?= $id ?>">Layanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="pesanan.php?id=<?= $id ?>>Pesanan</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="riwayat.php?id=<?= $id ?>">Riwayat</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="riview.php?id=<?= $id ?>">Review</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Log Out</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-0c30">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-custom-color-2 u-expanded-width u-radius-50 u-shape u-shape-round u-shape-1"></div>
        <p class="u-custom-font u-text u-text-default u-text-1">Riwayat<span style="font-size: 1.125rem;"></span>
        </p>
        <p class="u-custom-font u-text u-text-default u-text-2">Riwayat Saya </p>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="16.6%">
              <col width="16.6%">
              <col width="16.6%">
              <col width="16.6%">
              <col width="16.6%">
              <col width="17%">
            </colgroup>
            <tbody class="u-align-center u-table-body u-table-body-1">
              <tr style="height: 36px;">
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Id Pemesan</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Nama Pemesan</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Pilihan Paket</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Tanggal pesan</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Harga Paket</td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell">Status Pesanan</td>
              </tr>
              <?php
            foreach($sql as $s){
              ?>
              <tr style="height: 46px;">

                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$s['id'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$s['nama_pemesan'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$s['paket'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$s['tanggal'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$s['harga'] ?></td>
                <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?=$s['status'] ?></td>
              </tr>
              <?php
            }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2cb2"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/css-templates" target="_blank">
        <span>CSS Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Design Software</span>
      </a>. 
    </section>
  
</body></html>