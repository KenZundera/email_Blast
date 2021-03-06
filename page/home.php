<?php 
    include 'backend/koneksi.php';
?>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="assets/nativeCss/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/solid.min.css">

<div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold">Email Blast</h1>
              <p class="col-md-8 fs-4">Email blast adalah sebuah strategi untuk mengirimkan satu email pada sekelompok orang secara bersamaan. Strategi ini umumnya digunakan ketika seseorang perlu mengirimkan pesan yang sama kepada banyak penerima. </p>
            </div>
        </div>        
        
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-4">
                <div class="card text-light bg-danger mb-3" style="width: 23rem;">
                    <div class="layout">
                        <?php 
                            foreach($mysqli->query('SELECT COUNT(contactID) FROM contacts') as $row) {
                        ?>
                        <div class="card-1">
                            <h2 class="counter" data-target="<?php echo $row['COUNT(contactID)']?>"></h2>
                            <p>Kontak</p>
                        </div>
                        <div class="card-2">
                            <i class="fa-solid fa-address-card ikan"></i>
                        </div>
                    </div>
                        <?php }?>
                    <div class="card-footer">
                        <center>
                            <a href="Contact.html">detail&nbsp;<i class="fa-solid fa-circle-right"></i></a>
                        </center>
                        </div>
                </div>
            </div>
              

              <div class="col-lg-4 col-md-6 col-sm-4">
                <div class="card text-light bg-warning mb-3" style="width: 23rem;">
                    <div class="layout">
                    <?php 
                        foreach($mysqli->query('SELECT COUNT(userID) FROM users') as $row) {
                    ?>
                        <div class="card-1">
                            <h2 class="counter" data-target="<?php echo $row['COUNT(userID)']?>"></h2>
                            <p>Pengguna</p>
                        </div>
                        <div class="card-2">
                            <i class="fa-solid fa-user icon ikan"></i>
                        </div>
                    </div>
                    <?php }?>
                    <div class="card-footer">
                        <center>
                            <a href="UserManagement.html">detail&nbsp;<i class="fa-solid fa-circle-right"></i></a>
                        </center>
                      </div>
                  </div>
              </div>


              <div class="col-lg-4 col-md-12 col-sm-4">
                <div class="card text-light bg-success mb-3" style="width: 23rem;">
                    <div class="layout">
                    <?php 
                        $success = 0;
                        foreach($mysqli->query('SELECT COUNT(*) FROM messages WHERE status="success"') as $row) {
                    ?>
                        <div class="card-1">
                            <h2 class="counter" data-target="<?php echo $row['COUNT(*)']?>"></h2>
                            <p>Email Terkirim</p>
                        </div>
                        <div class="card-2">
                            <i class="fa-solid fa-paper-plane icon ikan"></i>
                        </div>
                    </div>
                    <?php }?>
                    <div class="card-footer">
                        <center>
                            <a href="email.html">detail&nbsp;<i class="fa-solid fa-circle-right"></i></a>
                        </center>
                      </div>
                  </div>
            </div>
          </div>

<script src="assets/js/scriptHome.js"></script>



