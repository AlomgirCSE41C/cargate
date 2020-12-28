<table class="table table-bordered table-striped">
  <thead >
    <tr >
      <th scope="col">ID</th>
      <th scope="col">Car Model</th>
      <th scope="col">Name</th>
      <th scope="col">address</th>
      <th scope="col">Number</th>
      

      
    </tr>
  </thead>


  <tbody>
            <?php foreach($all_buy as $row){?>
            <tr>
                
                    <th scope="row"><?php echo $row->buy_id ; ?></th>
                    <td><?php echo $row->buy_model ; ?></td>
                    <td><?php echo $row->buy_name; ?></td>
                    <td><?php echo $row->buy_address; ?></td>
                    <td><?php echo $row->buy_number; ?></td>
                    
                    
                    

                   
                
            </tr>
            <?php } ?>
            
        </tbody>


</table>