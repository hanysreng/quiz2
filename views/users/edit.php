
<?php
  $row = array();
  foreach($data[' users_data'] as $rows):
      $row = $rows;
  
?>
<div class="well col-md-12 well-sm">
<form class="form-horizontal" action="index.php?action=update&id=<?php echo $row['id']?>" method="POST">
    <fieldset>

        <!-- Form Name -->
        <legend class="text-center">Edit Users</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fistname">First name</label>  
            <div class="col-md-4">
                <input id="fistname" name="firstname" autofocus="" placeholder="first name" value="<?php echo $row['firstname'] ?>" class="form-control input-md" required="" type="text">

        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="lastname">Last name</label>  
            <div class="col-md-4">
                <input id="lastname" name="lastname" placeholder="last name" value="<?php echo $row['lastname'] ?>" class="form-control input-md" required="" type="text">

         </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>  
            <div class="col-md-4">
                <input id="title" name="email" placeholder="Email" value="<?php echo $row['email'] ?>" class="form-control input-md" required="" type="text">

        </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Khname</label>  
            <div class="col-md-4">
                <input id="title" name="khname" placeholder="Khname" value="<?php echo $row['khname'] ?>" class="form-control input-md" required="" type="text">

        </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="users">Userscol</label>  
            <div class="col-md-4">
                <input id="userscol" name="userscol" placeholder="Userscol" value="<?php echo $row['userscol'] ?>" class="form-control input-md" required="" type="number">

        </div>
        </div>
        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="btn_submit"></label>
            <div class="col-md-8">
                <button type="submit" id="btn_submit"  class="btn btn-success">Submit</button>
                <a class="btn btn-danger" href="index.php?action=view">Cancel</a>
            </div>
        </div>

    </fieldset>
<?php endforeach;?>
</form>
</div>