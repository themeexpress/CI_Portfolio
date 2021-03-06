<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_model {

   public function admin_login_info($email,$password){
     
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    $this->db->where('password',md5($password));
    $query_result=$this->db->get();
    $query=$query_result->row();
    return $query;
   }

   //save category
   public function save_category_info(){
       $data=array();
       $data['category_name']=$this->input->post('category_name',TRUE);
       $data['category_description']=$this->input->post('category_description',TRUE);
       $data['publication_status']=$this->input->post('publication_status',TRUE);
       $this->db->insert('category',$data);
   }
   //Manage category info
   public function all_published_categroy(){
       $this->db->select('*');
       $this->db->from('category');
       //$this->db->where('publication_status',1);
       $query_result=$this->db->get();
       return $query_result->result();		
   }

   //Edit Category
   public function edit_category($category_id){
    $this->db->select('*');
    $this->db->from('category');
    $this->db->where('category_id',$category_id);    
    $query_result=$this->db->get();
    return $query_result->row();
   }

   //Update Category
   public function update_category_info(){
    $data = array();
    $category_id=$this->input->post('category_id',TRUE);
    $data['category_name']=$this->input->post('category_name',TRUE);
    $data['category_description']=$this->input->post('category_description',TRUE);
    $data['publication_status']=$this->input->post('publication_status',TRUE);
    $this->db->where('category_id',$category_id);
    $this->db->update('category',$data);
   }

   //Delete Category
   public function delete_category($category_id){
    $this->db->where('category_id',$category_id);
    $this->db->delete('category');
   }



/*
-------------------
| Client Section |
-------------------
*/

   //save client
   public function save_client_info(){
       $data=array();
       $data['client_name']=$this->input->post('client_name',true);
       $data['client_email']=$this->input->post('client_email',true);
       $data['client_contact']=$this->input->post('client_contact',true);
       $data['comments']=$this->input->post('comments',true);
       $this->db->insert('clients',$data);
   }
   //select all client for portfolio 
   public function all_active_client_info(){
       $this->db->select('*');
       $this->db->from('clients');
       $this->db->where('client_status',1);
       $query_result=$this->db->get();       
       return $query_result->result();      
   }
   //Single client for edit
   public function edit_client($client_id){
    $this->db->select('*');
    $this->db->from('clients');
    $this->db->where('client_id',$client_id);
    $query_result=$this->db->get();
    return $query_result->row();
   }
   //Update Client info
   public function update_client_info(){
    $data=array();
    $client_id= $this->input->post('client_id', TRUE);
    $data['client_name']= $this->input->post('client_name', TRUE);
    $data['client_email']= $this->input->post('client_email', TRUE);
    $data['client_contact']= $this->input->post('client_contact', TRUE);
    $data['comments']= $this->input->post('comments', TRUE);
    $this->db->where('client_id',$client_id);
    $this->db->update('clients',$data);  
   }

   //Delete Client
   public function delete_client($client_id){
    $this->db->where('client_id',$client_id);
    $this->db->delete('clients');
   }

   //All published category for portfolio form
   public function all_published_category(){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();       
        return $query_result->result(); 
    }

//Manage client
    public function all_client_info(){
        $this->db->select('*');
       $this->db->from('clients');       
       $query_result=$this->db->get();
       return $query_result->result();	      
    }

    /**
     * Portfolio query
     */
    public function save_product_info($data){
		$this->db->insert('portfolio_items',$data);	
    }
    public function all_portfolio_info(){
        $this->db->select('*');
        $this->db->from('portfolio_items');  
        $this->db->where('portfolio_items.publication_status',1);             
        $this->db->join('category','portfolio_items.category_id=category.category_id');
        //$this->db->where('portfolio_items.publication_status',1);  
        $query_result=$this->db->get();
        return $query_result->result(); 
        
    }

/*
-----------------
| Profile Section |
------------------
*/

//public function update_profile_info(){
  

//}

public function delete_portfolio_info($portfolio_id){
    $this->db->where('portfolio_id',$portfolio_id);
    $this->db->delete('portfolio_items');
}







//     //Test joint
//    public function myjoint(){
//        $this->db->select('*');
//        $this->db->from('portfolio_items');
//        $this->db->join('category','portfolio_items.category_id=category.category_id');
//        $query=$this->db->get();
//        $q=$query->result();
//        foreach ($q as $data){
//            echo $data->portfolio_name;
//            echo '<br/>';
//            echo $data->category_name;


//        }
   //}

   

}