<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>/adminasset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php $name = $this->session->userdata('username');
          if($name){
            echo $name;
             $this->session->unset_userdata('username');
            } ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Portfolio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>add-portfolio"><i class="fa fa-circle-o"></i> Add Portfolio Item</a></li>
            <li><a href="<?php echo base_url()?>manage-portfolio"><i class="fa fa-circle-o"></i> Manage Portfolio</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Category</span>           
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>add-category"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="<?php echo base_url()?>manage-categroy"><i class="fa fa-circle-o"></i> Manage Category</a></li>
            
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Clients</span>           
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>add-client"><i class="fa fa-circle-o"></i> Add Client</a></li>
            <li><a href="<?php echo base_url()?>manage-clients"><i class="fa fa-circle-o"></i> Manage Clients</a></li>
            
          </ul>
          
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url()?>utility">
            <i class="fa fa-files-o"></i>
            <span>Home Utility</span>       
                       
          </ul>         
          </a>
          
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>