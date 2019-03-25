

<?php
    
    function view_users(){
        $query = "SELECT * FROM users";
        include 'connection.php';
        $result = mysqli_query($connection, $query);
        $rows = [];
        if(mysqli_num_rows($result)> 0){

            while($result_into_array = mysqli_fetch_assoc($result)){
                $rows[] = $result_into_array ;

            }

        }
        return $rows;

    // var_dump($rows);
    }

    function m_add_users(){
        if(isset($_POST['save'])){
            include 'connection.php';
           $id = $_GET['id'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $khname = $_POST['khname'];
          $userscol = $_POST['userscol'];
    
        $query = "INSERT INTO users(id,firstname,lastname,email,khname,userscol) values('$id','$firstname','$lastname','$email','$khname',$userscol)";
        $result = mysqli_query($connection,$query);
       
        }
        return $result;   
      }

      function m_delete_users(){
        include 'connection.php';
        $id = $_GET['id'];
        $query = "DELETE from users where id= '$id' ";
    
        $result = mysqli_query( $connection,$query);
        return $result;
      }

      function detail_users(){
        include "connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($connection,$query);
        // var_dump($result);die();
        return $result;
      }

      function m_users_detail(){
        include "connection.php";
        $id = $_GET['id'];
         
        $query = "SELECT * from employee where id ='$id'";
        $result = mysqli_query($connection,$query);
         return $result;
    
    

      }

      function m_update_users(&$data){
        include 'connection.php';
          $id = $_GET['id'];
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $khname = $_POST['khname'];
          $userscol = $_POST['userscol'];
          $query = "UPDATE users set firstname='$firstname',lastname='$lastname',email=$email,khname=$khname,userscol=$userscol where id= '$id'";
          $result = mysqli_query($connection,$query);
           return $result;
          // var_dump('$result');die();
        
      }