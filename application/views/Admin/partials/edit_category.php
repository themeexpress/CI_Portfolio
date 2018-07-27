<section class="content">
      <div class="row">
        <div class="col-md-12">        

          <div class="box">           
            <?php 
            $message=$this->session->userdata('message');
            if($message){
              echo $message;
              $this->session->unset_userdata('message');
            }	      
            
            ?>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form class="form-horizontal" method="POST" action="<?php echo base_url()?>update-category">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="category_name" placeholder="Portfolio Name" value="<?php echo $single_category_info->category_name;?>" >
                    <input type="hidden" class="form-control" name="category_id" value="<?php echo $single_category_info->category_id;?>" >

                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Category Description</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" name="category_description" rows="3"><?php echo $single_category_info->category_description;?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="publication_status" class="col-sm-2 control-label">Publication Status</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="publication_status">
                    <option value='1'>Published</option>
                    <option value='0'>Unpublished</option>                   
                  </select>
                  </div>
                </div>                
                  <div class="col-sm-6">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
                  </div>
                                       
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->