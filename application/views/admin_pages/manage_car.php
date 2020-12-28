<table class="table table-bordered table-striped">
  <thead >
    <tr >
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
      <th scope="col">Transmission</th>
      <th scope="col">Location</th>
      <th scope="col">Mileage</th>
      <th scope="col">Price</th>
      
      <th scope="col">Delete</th>

      
    </tr>
  </thead>


  <tbody>
            <?php foreach($all_car as $row){?>
            <tr>
                
                    <th scope="row"><?php echo $row->manage_id ; ?></th>
                    <td><?php echo $row->manage_name ; ?></td>
                    <td><?php echo $row->manage_model; ?></td>
                    <td><?php echo $row->manage_myear; ?></td>
                    <td><?php echo $row->manage_transmission; ?></td>
                    <td><?php echo $row->manage_location; ?></td>
                    <td><?php echo $row->manage_mileage; ?></td>
                    <td><?php echo $row->price; ?></td>
                    
                    <td>
                        <a href="<?php echo base_url();?>delete-car/<?php echo $row->manage_id; ?>" class="btn btn-danger">Delete</a>
                    </td> 

                   
                
            </tr>
            <?php } ?>
            
        </tbody>


</table>