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
					<?php foreach($user as $u){ ?>
					<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
					<table style="margin:20px auto;">
						
							<div class="form-group">
								<label for="username">Username*</label>
							<input class="form-control" type="text" name="username" value="<?php echo $u->username ?>">
							
                             <div class="form-group">
								<label for="name">Name*</label>
							<input class="form-control" type="text" name="name" value="<?php echo $u->name ?>">
				
							<div class="form-group">
								<label for="name">Email*</label>
							<input class="form-control" type="text" name="email" value="<?php echo $u->email ?>">
						
							<div class="form-group">
								<label for="name">Phone*</label>
							<input class="form-control" type="numeric" name="phone" value="<?php echo $u->phone ?>">
						
							<div class="form-group">
								<label for="name">Password*</label>
							<input class="form-control" type="text" name="password" value="<?php echo $u->password ?>">
						
							<div class="form-group">
								<label for="name">Level*</label>
							<input class="form-control" type="text" name="level" value="<?php echo $u->level ?>">
						
							<td></td>
							<td><input type="submit" value="Simpan"></td>
						
					</table>
					</form>	
					<?php } ?>
				</div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php $this->load->view('partials/footer'); ?>