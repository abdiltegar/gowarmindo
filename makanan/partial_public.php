<div class="container">
    <div class="row">
        <div class="col-md-12 fade-in">
            <center>
                <img src="../images/logo.png" class="img-menu2" alt=""><br><br>
                <h1 class="text-green">Makanan</h1>
            </center>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                        <?php 
                        $makanan_all = $makanan->getAll();
                        if($makanan_all['total'] > 0){
                            foreach ($makanan_all['data'] as $row){
                                ?>
                                <div class="col-md-4" style="margin-top: 20px !important;" data-aos="fade-down">
                                    <div class="card menu-card-light menu-card-menumenu">
                                        <div class="card-body">
                                            <center>
                                                <img src="../images/upload/<?php echo $row['foto']; ?>" alt="" class="img-menu">
                                            </center>
                                            <br>
                                            <b><?php echo $row['nama_makanan']; ?></b>
                                            <p><?php echo $row['deskripsi']; ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <b>Rp. <?php echo number_format($row['harga'], 0, ",", "."); ?></b>
                                            <!-- <button class="btn btn-success btn-menu"><img src="images/noun_cart_2345547.svg" class="icon"></button> -->
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }else{
                            ?>
                            <div class="alert alert-info">Belum ada daftar makanan</div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>