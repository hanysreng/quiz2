

<?php
   $data = array();
     flexible_function($data);

     function flexible_function(&$data){
         $function = 'view';
         if(isset($_GET['action'])){
             $action = $_GET['action'];
             $function = $action;
         }

        $function($data); 
     }

   function view(&$data){
    $data['users-data'] = view_users();
     $data['page'] = "users/view";

   }

   function add(&$data){
    $data['page'] = "users/add";
    
   }


   function get_form_data(){
     $add_data = m_add_users();
     if($add_data){
      header("Location: index.php?action=view");
     }else{
      header("Location: index.php?action=add");
     }
    }


    function delete(&$data){

        $data_delete = m_delete_users();
        if($data_delete){
    
          header("Location:index.php?action=view");
      }
      
      }

      function detail(&$data){
        $data[' users_data'] = detail_users();
        $data['page'] = "users/detail";
      }

      
  function edit(&$data){
    $data['page'] = "users/edit";
   
    $data[' users_data'] =  m_users_detail();
   
  }

  
  function update(&$data){
    $id = $_GET['id'];
    $data = m_update_users($_POST);
    if($data){
     $action = 'view';
    }else{
     $action = 'edit&id=$id';
    }
     header("location:index.php?action = $action");
  } 