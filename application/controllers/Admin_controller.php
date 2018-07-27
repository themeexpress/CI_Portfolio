<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        // $admin_id=$this->session->userdata('admin_id');
        // if($admin_id==NULL){
        //     redirect('/admin-login');
        // }        
        
    }

	public function index()
	{   
		$this->load->view('admin/login/login');
    }
        

    public function admin_login_check(){

        $email =$this->input->post('email',TRUE);
        $password=$this->input->post('password',TRUE);

        $this->load->model('admin_model');

        $query=$this->admin_model->admin_login_info($email,$password);       
        $sdata=array();
		if ($query) {
                    $sdata['user_id']=$query->user_id;
                    $sdata['username']=$query->username;                     
                    $testarray =$this->session->set_userdata($sdata);
                    redirect('/dashboard');
                    //if not available the redirect with error message

		}else{
			$sdata['error_message']='Incorrect Email or Password';
			$this->session->set_userdata($sdata);			
			$this->load->view('admin/login/login',$sdata);

		}
    }
    //dashboard
    public function dashboard(){
        $data=array();
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/main_content.php','',TRUE);
        $this->load->view('admin/master',$data);
    }

    //sign out
    public function sign_out(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $data=array();
        $data['error_message']="You have Successfully Logout";
        $this->session->set_userdata($data);
        redirect('/admin-login');
    }
    //Add portfolio
    public function add_portfolio(){
        $data=array();        
        $data['all_active_client_info']=$this->admin_model->all_active_client_info(); 
        $data['all_published_category']=$this->admin_model->all_published_category(); 
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/add_portfolio.php',$data,TRUE);
        $this->load->view('admin/master',$data);
    }
    //save portfolio
    public function save_portfolio(){
        $data=array();
		$data['portfolio_name']=$this->input->post('portfolio_name',TRUE);
		$data['client_id']=$this->input->post('client_id',TRUE);
		$data['category_id']=$this->input->post('category_id',TRUE);
		$data['porfolio_description']=$this->input->post('porfolio_description',TRUE);
		//product image upload
			$fdata=array();
			$error="";
				$config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('portfolio_image'))
                {
                        $error = $this->upload->display_errors();

						echo $error;
						//$this->load->view('upload_form', $error);
                }
                else
                {
				$fdata=$this->upload->data();	
				$data['portfolio_image']=$config['upload_path'].$fdata['file_name'];                    
                }		
        $data['live_link']=$this->input->post('live_link',true); 
        $data['github_link']=$this->input->post('github_link',true);  
        $data['duration']=$this->input->post('duration',true);  
        $data['publication_status']=$this->input->post('publication_status',true);  
        $data['comments']=$this->input->post('comments',true);

        $this->admin_model->save_product_info($data);
        $sdata=array();
        $sdata['message']='Portfolio Information saved successfully';
        $this->session->set_userdata($sdata);
        redirect('add-portfolio');
    }   
   
    //Manage Portfolio
    public function manage_portfolio(){
        $data=array();
        $data['all_portfolio_info']=$this->admin_model->all_portfolio_info();
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/manage_portfolio.php',$data,TRUE);
        $this->load->view('admin/master',$data);
    }
    //category section
    public function add_category(){ 
        $data=array();              
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/add_category.php','',TRUE);
        $this->load->view('admin/master',$data);
    }
    public function save_category(){
        $sdata=array();        
        $this->admin_model->save_category_info();        
        $sdata['message']="Category Inserted Successfully";
        redirect('add-category',$sdata);
    }
    public function manage_category(){        
        $data=array();        
        $data['all_published_categroy']=$this->admin_model->all_published_categroy();       
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/manage_category.php',$data,TRUE);
        $this->load->view('admin/master',$data);
    }

    //Edit Category
    public function edit_category($category_id){
        $data=array();
        $data['single_category_info']=$this->admin_model->edit_category($category_id);
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/edit_category.php',$data,TRUE);
        $this->load->view('admin/master',$data);
    }
    //Update Category
    public function update_category(){
        $this->admin_model->update_category_info();
        $sdata=array();
        $sdata['message']='Category Updated Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('manage-categroy');
    }

    //Delete Category

    public function delete_category($category_id){
         $this->admin_model->delete_category($category_id);
        $sdata=array();
        $sdata['message']='Category Deleted Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('manage-categroy');


    }




    /*
    -------------------
   | Client section
   --------------------
   */
    public function add_client(){
        $data=array();
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/add_client.php','',TRUE);
        $this->load->view('admin/master',$data);
    }
    //save client
    public function save_client(){
        $sdata=array();        
        $this->admin_model->save_client_info();        
        $sdata['message']="Client Info Inserted Successfully";
        redirect('add-client',$sdata);
    }   

    //Manage clients
    public function manage_clients(){
        $data=array();        
        $data['all_client_info']=$this->admin_model->all_client_info(); 
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/manage_clients.php',$data,TRUE);
        $this->load->view('admin/master',$data);
    }
    //Edit Client

    public function edit_client($client_id){
        $data=array();
        $data['single_client_info']=$this->admin_model->edit_client($client_id);
        $data['sidebar_menu']=$this->load->view('admin/partials/sidebar_menu.php','',TRUE);
        $data['main_content']=$this->load->view('admin/partials/edit_client.php',$data,TRUE);
        $this->load->view('admin/master',$data);

    }

    //update Client
    public function update_client(){
        $this->admin_model->update_client_info();
        $sdata=array();
        $sdata['message']='Client Updated Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('manage-clients');
    }
    //Delele Client
    public function delete_client($client_id){
        $this->admin_model->delete_client($client_id);
        $sdata=array();
        $sdata['message']='Client Updated Successfully!!';
        $this->session->set_userdata($sdata);
        redirect('manage-clients');
    }

    /*

 //manage product
    public function manage_product(){        
        $data=array();
        $data['products_info']=$this->Super_admin_model->show_all_products();
        $data['admin_main_contents']=$this->load->view('admin/pages/manage_products.php',$data,true);
        $this->load->view('admin/adminmaster',$data); 
    }
    //unpublished product
    public function unpublished_product($product_id){
        $this->Super_admin_model->unpublished_product($product_id);
        redirect('manage-product'); 

    }
    //published a product
    public function published_product($product_id){
        $this->Super_admin_model->published_product($product_id);
        redirect('manage-product'); 
    }
    //delete product
    public function delete_product($product_id){       
      $this->Super_admin_model->delete_product_info($product_id);
      redirect('manage-product');
    }
    
    */

}
