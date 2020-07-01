<div id="container" class="container" >
     <center> 
     <button><a href="<?php echo site_url('Welcome/index/'); ?>" class="w3-button w3-bar-item">Back</a></button>
      <?php if($this->session->flashdata('message')){?>
          <div class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>
		</center>
        <table align = "center" border = "1" class="table table-bordered table-hover table-striped" >
            <thead>
            <th colspan="3" style="background-color:#B5651D;">
            	State Management
            </th>
            <tr>
                <th>Sr. No.</th>
                <th>State Name</th>              
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
                foreach ($view_data as $key => $data) { 
                ?>
                <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><a href="<?php echo site_url('Welcome/edit_state/'. $data['id'].''); ?>">Edit</a>  |  	           
                    <a onClick="return confirm('are you sure you want to delete?');" href="<?php echo site_url('Welcome/delete_state/'. $data['id'].''); ?>">Delete</a></td>
                </tr>
                <?php
                    $i++;
                      }
                    else:
                ?>
                <tr>
                    <td colspan="3" align="center" >No Records Found..</td>
                </tr>
                <?php
                    endif;
                ?>

            </tbody>                                
        </table>
</div>