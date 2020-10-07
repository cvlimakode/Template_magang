<?php $this->load->view('partials/head'); ?>
<?php $this->load->view('partials/sidebar'); ?>
<?php $this->load->view('partials/navbar'); ?>
   

      <div class="content">
      <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card-header">
						<a href="<?php echo site_url('/crud') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        <h4 class="card-title"> Simple Table</h4>
			</div>
			<div class="container">
			<div class="row">
              <div class="card-body">
			  
              <form action="<?php echo site_url('crud/tambah_aksi') ?>" method="post" enctype="multipart/form-data" >
			  
							<div class="form-group">
								<label for="username">Username*</label>
								<input class="form-control"
								 type="text" name="username" placeholder="username" />
								
							
							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control"
								 type="text" name="name" min="0" placeholder="Name" />
								


              <div class="form-group">
								<label for="email">Email*</label>
								<input class="form-control"
								 type="text" name="email" min="0" placeholder="Email" />
								
							</div>

              <div class="form-group">
								<label for="phone">Phone*</label>
								<input class="form-control"
								 type="number" name="phone" min="0" placeholder="Phone" />
								
							</div>

              <div class="form-group">
								<label for="password">Password*</label>
								<input class="form-control"
								 type="text" name="password" min="0" placeholder="Password" />
								
							</div>

              <div class="form-group">
								<label for="level">Level*</label>
								<select name="Level" > 
									<option value="admin">Admin</option>
									<option value="superadmin">Superadmin</option>
								</select>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Tambah" />
						</form>
						</div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php $this->load->view('partials/footer'); ?>