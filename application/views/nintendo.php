<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    </div>

    <div class="row text-center mt-3">

        <?php foreach ($nintendo as $brg) : ?>

            <div class="card ml-3 mt-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/' .$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge bg-info text-dark mb-3">Rp. 
                        <?php echo number_format($brg->harga, 0,',','.') ?></span>
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
                        <?php echo anchor('dashboard/detail/' .$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>
                   
                </div>
                </div>
                        

        <?php endforeach; ?>
    </div>
</div>