<div id="container" class="container" >
    <center><button><a href="<?php echo site_url('Welcome/index/'); ?>" class="w3-button w3-bar-item">Back</a></button>
       <?php if($this->session->flashdata('message')){?>
          <div class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>
		</center>
        <table id="myTable" align = "center" border = "1" class="table table-bordered table-hover table-striped" >
            <thead>
            <th colspan="4" style="background-color:#B5651D;">
            	City Management
            
             <select name= "state" onChange="myFunction()" id="myInput">
                <option>Select State</option>
                  <?php foreach ($state_data as $key => $data) { ?>                
                    <option value = "<?php echo $data['name']; ?>"> <?php echo $data['name']; ?></option>
                  <?php } ?>
                </select> </th>
            <tr>
                <th>Sr. No.</th>
                <th>State Name</th>              
                <th>City Name</th>              
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
                    <td><?php echo $data['city_name']; ?></td>
                    <td><?php if($data['id']) { ?><a href="<?php echo site_url('Welcome/edit_city/'. $data['id'].''); ?>">Edit</a>  |  	           
                    <a onClick="return confirm('are you sure you want to delete?');" href="<?php echo site_url('Welcome/delete_city/'. $data['id'].''); ?>">Delete</a> <?php } ?></td>
                </tr>
                <?php
                    $i++;
                      }
                    else:
                ?>
                <tr>
                    <td colspan="4" align="center" >No Records Found..</td>
                </tr>
                <?php
                    endif;
                ?>

            </tbody>                                
        </table>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>