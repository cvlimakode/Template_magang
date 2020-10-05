<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
<?php $this->load->view("admin/_partial/head"); ?>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Toko Buah</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
</head>

<body id="page-top">

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

        <!--isi  data-->

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/barang/Daftarbarang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Nama Barang</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Product name" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Harga Barang</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="price" min="0" placeholder="Product price" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="price">Stok Barang</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="price" min="0" placeholder="Product Stock" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Deskripsi Barang</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Product description..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


                        </div>
                    <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partial/footer"); ?>

            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->


		<?php $this->load->view("admin/_partial/js.php") ?>

</body>

</html>