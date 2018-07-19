<section class="content">
      <div class="row">
        <div class="col-md-12">    
          <div class="box"> 
          <h3 style="color:green">
						<?php 
						$message=$this->session->userdata('message');
						if ($message) {
							echo $message;
							$this->session->unset_userdata('message');
						}
						?>
					</h3>     
            <!-- /.box-header -->
            <div class="box-body pad">
              <form class="form-horizontal" action="<?php echo base_url();?>save-portfolio" method="POST" enctype='multipart/form-data'>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Portfolio Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="portfolio_name" placeholder="Portfolio Name">
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Select Client</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="client_id">
                      <?php foreach($all_active_client_info as $all_client){?>
                        <option value="<?php echo $all_client->client_id;?>"><?php echo $all_client->client_name;?></option>  
                      <?php } ?>                  
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Select Category</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="category_id">
                      <?php foreach($all_published_category as $v_category){?>
                        <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>  
                      <?php } ?>                  
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="textarea" placeholder="Place some text here" name="porfolio_description"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    </textarea>
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="File">Image Upload</label>
                  <div class="col-sm-10">
                    <input type="file" name="portfolio_image">
                  </div>
                </div>

                <div class="form-group">
                  <label for="live_link" class="col-sm-2 control-label">Portfolio Live link</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" name="live_link" placeholder="Live Link">
                  </div>
                </div>
                <div class="form-group">
                  <label for="github_link" class="col-sm-2 control-label">Github Link</label>
                  <div class="col-sm-10">
                    <input type="url" class="form-control" name="github_link" placeholder="Github Link">
                  </div>
                </div>
                <div class="form-group">
                  <label for="github_link" class="col-sm-2 control-label">Duration</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="duration" placeholder="Project Duration">
                  </div>
                </div>
                

                 <div class="form-group">
                    <label class="col-sm-2 control-label">Publication Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="publication_status">
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>                     
                      </select>
                    </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Comments</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="comments" placeholder="Comments">
                  </div>
                </div>
               
                <div class="box-footer">
                
                <button type="submit" class="btn-lg btn btn-info pull-right">Submit</button>
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