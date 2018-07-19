<section class="content">
      <div class="row">
        <div class="col-md-12">         

          <div class="box">           
            
            <!-- /.box-header -->
            <div class="box-body pad">
              <form class="form-horizontal" method="POST" action="<?php echo base_url()?>save-client">
                <div class="form-group">
                  <label for="Client_name" class="col-sm-2 control-label">Client Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="client_name" placeholder="Client Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Client_email" class="col-sm-2 control-label">Client Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="client_email" placeholder="Client Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Client_contact" class="col-sm-2 control-label">Client Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="client_contact" placeholder="Client Contact">
                  </div>
                </div> 

                <div class="form-group">
                <label for="Comments" class="col-sm-2 control-label">Comments</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="comments" placeholder="Comments">
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