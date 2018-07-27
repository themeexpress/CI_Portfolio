<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">My clients Info</h3>
              
              <?php $message=$this->session->userdata('message');
            if ($message) {?>
              <div class="alert alert-info">
                <?php echo $message; ?>
              </div>
              <?php }              

              $this->session->unset_userdata('message');
            
            ?>
                         
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  
                <tr>
                  <th>Client Name</th>
                  <th>Client Email</th>
                  <th>Client Contact</th>
                  <th>Comments</th>
                  <th>Client Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($all_client_info as $v_clients){?>
                <tr>
                  <td><?php echo $v_clients->client_name; ?></td>
                  <td><?php echo $v_clients->client_email; ?></td>
                  <td><?php echo $v_clients->client_contact; ?></td>
                  <td><?php echo $v_clients->comments; ?> </td>
                  <td><?php echo $v_clients->client_status; ?> </td>
                  <td><a href="<?php echo base_url();?>edit-client/<?php echo $v_clients->client_id; ?>">Edit</a> | <a href="<?php echo base_url();?>delete-client/<?php echo $v_clients->client_id; ?>">Delete</a></td>
                </tr>
                <?php } ?>                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->