<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view("admin/_partial/head"); ?>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Toko Buah</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- navbar -->
    <?php $this->load->view("admin/_partial/navbar"); ?>

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partial/sidebar"); ?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>       
        
        <!-- DataTables Example -->
        <a class="btn btn-succes mb-3" style="color:white;" href="<?= site_url("admin/barang/Tambahbarang");?>">Tambah Barang</a>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Daftar Barang <br>
            <a href="<?= site_url('admin/barang/Tambahbarang') ?>" class="btn btn-success btn-md">Tambah Barang</a></div>
            
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($barang as $isi) :?>
                    <td><?= $isi->NamaBarang;?></td>
                    <td><?= $isi->DeskripsiBarang;?></td>
                    <td><?= $isi->HargaBarang;?></td>
                    <td><?= $isi->StokBarang;?></td>
                    <td width="100">
                        <a href="<?= site_url('admin/barang/Editbarang/'.$isi->KodeBarang)?>"class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?= site_url('admin/barang/Hapusbarang')?>"class="btn btn-small text-danger"><i class="fas fa-trash">
                        </i> Hapus </a>
                    </td>
                </tbody>
                  <?php $no++; endforeach; ?>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>

        <!-- Sticky Footer -->
        <?php $this->load->view("admin/_partial/footer"); ?>

        <!-- JavaScript-->
         <?php $this->load->view("admin/_partial/js"); ?>
    </body>
</html>