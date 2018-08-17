<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="10%">Portfolio Name</th>
                  <th width="20%">Description</th>
                  <th width="30%">Image</th>
                  <th width="5%">Live Link</th>
                  <th width="5%">Github link</th>
                  <th width="5%">Duration</th>
                  <th width="5%">Status<th>
                  <th width="30%">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($all_portfolio_info as $v_portfolio){?>
                  <?php $this->load->helper('text');?>
                <tr>                
                  <td><?php echo $v_portfolio->portfolio_name;?></td>
                  <td><?php echo word_limiter($v_portfolio->porfolio_description,4);?></td>
                  <td><img style="width:20%;" src="<?php echo $v_portfolio->portfolio_image;?>"></td>
                  <td><a href="<?php echo $v_portfolio->live_link;?>">Live Link</a></td>
                  <td><a href="<?php echo $v_portfolio->github_link;?>">Github Link</a> </td>
                  <td><?php echo $v_portfolio->duration;?> Days</td>
                  <td><?php echo $v_portfolio->publication_status;?></td>
                  <td><a href="<?php echo base_url();?>update-portfolio/<?php echo $v_portfolio->portfolio_id; ?>">Edit</a> | <a href="<?php echo base_url();?>delete-portfolio/<?php echo $v_portfolio->portfolio_id; ?>">Delete</a></td>                 
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