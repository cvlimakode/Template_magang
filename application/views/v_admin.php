<?php $this->load->view('partials/head'); ?>
<?php $this->load->view('partials/sidebar'); ?>
<?php $this->load->view('partials/navbar'); ?>
   

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="col-md-12">
              <?php echo anchor('crud/tambah/','Tambah'); ?>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <!-- <th>
                        No
                      </th> -->
                      <th>
                        Username
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Phone
                      </th>
                      <th>
                        Password
                      </th>
                      <th>
                        Level
                      </th>
                    </thead>
              
                    <tbody>
                     <?php foreach($user as $u):?>
                     <tr>
                       <td><?php echo $u->username ?></td>
                       <td><?php echo $u->name ?></td>
                       <td><?php echo $u->email ?></td>
                       <td><?php echo $u->phone ?></td>
                       <td><?php echo $u->password ?></td>
                       <td><?php echo $u->level ?></td>
                       <td>
			                <?php echo anchor('crud/edit/'.$u->username,'Edit'); ?>
                      <?php echo anchor('crud/hapus/'.$u->username,'Hapus'); ?>
		                	</td>
                     </tr>
                    <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php $this->load->view('partials/footer'); ?>