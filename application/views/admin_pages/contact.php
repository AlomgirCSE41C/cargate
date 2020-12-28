<table class="table table-bordered table-striped">
  <thead >
    <tr >
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      

      
    </tr>
  </thead>


  <tbody>
            <?php foreach($all_contact as $row){?>
            <tr>
                
                    <th scope="row"><?php echo $row->cnt_id ; ?></th>
                    
                    <td><?php echo $row->cnt_name; ?></td>
                    <td><?php echo $row->cnt_email; ?></td>
                    <td><?php echo $row->cnt_msg; ?></td>
                    


                   
                
            </tr>
            <?php } ?>
            
        </tbody>


</table>