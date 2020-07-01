<div id="container" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <center><button><a href="<?php echo site_url('Welcome/index/'); ?>" class="w3-button w3-bar-item">Back</a></button></center>
          <form method="post" action="<?php echo site_url('Welcome/insert_city'); ?>" name="data_register">
            <table align = "center" border = "1" class="table table-bordered table-hover table-striped" >
            <thead>
            <th colspan="3" style="background-color:#B5651D;">
              Add City
            </th>
          </thead>
          <tbody>
            <tr>
                <td>Select State</td> <td>
                <select name= "state">
                  <?php foreach ($view_data as $key => $data) { ?>                
                    <option value = "<?php echo $data['id']; ?>"> <?php echo $data['name']; ?></option>
                  <?php } ?>
                </select>
              </td>               
            </tr>
            <tr>
              <td>Enter City Name</td>   
                <td>
                <input type="text" class="form-control" name="city" required >
              </td>
            </tr>
            <tr>
              <td align = "center"><button type="submit" class="btn btn-primary pull-right">Save</button></td>
              <td align = "center"><button type="submit" class="btn btn-primary pull-right"><a href="<?php echo site_url('Welcome/index/'); ?>">Cancel</a></button></td>
           </tr>
          </tbody>
          </form>
        </div>
    </div>
</div>
