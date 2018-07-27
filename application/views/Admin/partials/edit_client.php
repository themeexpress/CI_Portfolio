<section class="content">
      <div class="row">
        <div class="col-md-12">         

          <div class="box">           
            
            <!-- /.box-header -->
            <div class="box-body pad">
              <form class="form-horizontal" method="POST" action="<?php echo base_url()?>update-client">
                <div class="form-group">
                  <label for="Client_name" class="col-sm-2 control-label">Client Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="client_name" placeholder="Client Name" value="<?php echo $single_client_info->client_name;?>" >
                    <input type="hidden" class="form-control" name="client_id" value="<?php echo $single_client_info->client_id;?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="Client_email" class="col-sm-2 control-label">Client Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="client_email" placeholder="Client Email" value="<?php echo $single_client_info->client_email;?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Client_contact" class="col-sm-2 control-label">Client Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="client_contact" placeholder="Client Contact" value="<?php echo $single_client_info->client_contact;?>">
                  </div>
                </div> 

                <div class="form-group">
                <label for="Comments" class="col-sm-2 control-label">Comments</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="comments" placeholder="Comments" value="<?php echo $single_client_info->comments;?>">
                  </div>
                </div> 
                <div class='row'>  
                <div class="col-sm-6">
                  
                </div> 
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
                </div>  
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