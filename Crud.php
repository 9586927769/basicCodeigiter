<?php

class Crud extends CI_Controller
{
    public function index()
    {
          
       $data['student_details']=$this->crud_model->getAllStudents(); 
       $this->load->view('crud_view',$data); 

    }

  
    public function addStudent() {
      
        
      $this->form_validation->set_rules('rollno','Roll No','trim|required');
      $this->form_validation->set_rules('firstname','First Name','trim|required');
      $this->form_validation->set_rules('lastname','Last Name','trim|required');
      $this->form_validation->set_rules('email','Email','trim|required');
      $this->form_validation->set_rules('password','Password','trim|required');
      $this->form_validation->set_rules('confirmpassword','Confirm Password','trim|required');
    
      if($this->form_validation->run() == false){
   
        $data_error = [

         
         'error'=>validation_errors()

        ];    
      
         $this->session->set_flashdata($data_error);
      
       }    

       else{

           $result=$this->crud_model->insertStudent([

          'rollno'=>$this->input->post('rollno'),
          'firstname'=>$this->input->post('firstname'),
          'lastname'=>$this->input->post('lastname'),
          'password'=>$this->input->post('password'),
          'confirmpassword'=>$this->input->post('confirmpassword'),

          ]);
          
          if($result){
           
            $this->session->set_flashdata('insert','Your data has been successfully added'); 

          }
       }
     
        redirect('index.php/crud/');
    
    }
  


      public function editStudent($id)
     {

       $data['singleStudent'] = $this->crud_model->getSingleStudent($id);

       $this->load->view('edit_view', $data);


     }


     public function update($id){

      
      $this->form_validation->set_rules('rollno','Roll No','trim|required');
      $this->form_validation->set_rules('firstname','First Name','trim|required');
      $this->form_validation->set_rules('lastname','Last Name','trim|required');
      $this->form_validation->set_rules('email','Email','trim|required');
      $this->form_validation->set_rules('password','Password','trim|required');
      $this->form_validation->set_rules('confirmpassword','Confirm Password','trim|required');
    
      if($this->form_validation->run() == false){
   
        $data_error = [

         
         'error'=>validation_errors()

        ];    
      
         $this->session->set_flashdata($data_error);
      
       }    

       else{

           $result=$this->crud_model->updateStudent([

          'rollno'=>$this->input->post('rollno'),
          'firstname'=>$this->input->post('firstname'),
          'lastname'=>$this->input->post('lastname'),
          'password'=>$this->input->post('password'),
          'confirmpassword'=>$this->input->post('confirmpassword'),

           ], $id);
          
          if($result){
           
            $this->session->set_flashdata('updated','Your data has been successfully updated'); 

          }
       }
     
        redirect('index.php/crud/');
    
    }

      public function deleteStudent($id)
      {
         $result=$this->crud_model->deleteItem($id);

        if($result== true ){

          $this->session->set_flashdata('deleted', 'The product has been deleted ');



        }
   
          redirect('index.php/crud/');

      }







     }


  

 
?>