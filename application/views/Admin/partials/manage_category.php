<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Category Info</h3>
              
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
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>Publication Status</th>
                  <th>Actions</th>                  
                </tr>
                </thead>
                <tbody>
                  <?php foreach($all_published_categroy as $value_category){?>
                <tr>
                  <?php $this->load->helper('text');?>
                  <td><?php echo $value_category->category_name; ?></td>
                  <td><?php echo word_limiter($value_category->category_description, 4); ?></td>
                  <td><?php echo $value_category->publication_status; ?></td>
                  <td> <a href="<?php echo base_url();?>edit-category/<?php echo $value_category->category_id?>">Edit</a> | <a href="<?php echo base_url();?>delete-category/<?php echo $value_category->category_id?>">Delete</a> </td>                  
                </tr>
                  <?php } ?>
                </tbody>
              
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