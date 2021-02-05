<?php

  class Crud_model extends CI_Model{
  
  public function getAllStudents(){

   $query=$this->db->get('bookdatabase');   
   if($query){
    
     return $query->result();
   }
 

 } 


    public function insertStudent($data){

        $query = $this->db->insert('bookdatabase',$data);
        
        if($query){
       
          return true;
        }
        else {
            
           return false; 

        }
    }


    public function getSingleStudent($id){

      $this->db->where('id',$id);
      $query = $this->db->get('bookdatabase');
    
      if($query){
        
        return $query->row();  

      }
    }
 
    public function updateStudent($data,$id)
     {
         $this->db->where('id',$id);
        $query= $this->db->update('bookdatabase', $data);

        if($query){
         
           return true;
        }
         
         else
         {
            return false;


         }


     }   
         public function deleteItem($id)
         {

           $this->db->where('id', $id);
           $query =$this->db->delete('bookdatabase');
           
            if($query)
            {
               return true;  
            }
             
             else
             {
                 return false;

             }


            }

           public function deleteproduct($id)
           {

             $this->db->where('id',$id);
             $query  =$this->db->delete('product');

             if($query)
             {
               return true;
             } 
                 
              else
              {
                return false;
              }

           }
     





}

?>