<div id="container" class="container">

<div class="row">
 <div class="col-md-8 col-md-offset-2">
    <center><button><a href="<?php echo site_url('Welcome/state/'); ?>" class="w3-button w3-bar-item">Back</a></button></center>
      <?php foreach ($edit_data as $key => $data) {  ?>
     <form method="post" action="<?php echo site_url('Welcome/update_state/'.$data['id'].''); ?>" name="data_register">
        <table align = "center" border = "1" class="table table-bordered table-hover table-striped" >
        <thead>
        <th colspan="3" style="background-color:#B5651D;">
          Edit State Name
        </th>        
        </thead>
         <tbody>
        <td>Enter State Name</td>   
          <td>
          <textarea name = "state" required><?php echo $data['name']; ?></textarea> 
        </td>
        <tr>
          <td colspan="3" align = "center"><button type="submit" class="btn btn-primary pull-right">Submit</button></td>
       </tr>
      </tbody>
      </form>
      <?php } ?> 
    
 </div>
</div>
  
</div>
