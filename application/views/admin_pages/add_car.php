<div class="container pl-5">
	<div class="row ml-5">
        <div class="col-md-6">
            <div class="form_main">
                <h4 class="heading"><strong>Add </strong> Car Information <span></span></h4>
                <div class="form">
                    <form action="<?php echo base_url()?>save-car" method="post" enctype="multipart/form-data">
                        <input type="text" required="" placeholder="Enter car Name" value="" name="manage_name" class="txt">
                        <input type="text" required="" placeholder="Enter Car Model" value="" name="manage_model" class="txt">
                        <input type="text" required="" placeholder="Enter car Year" value="" name="manage_myear" class="txt">
                        <input type="text" required="" placeholder="Enter transmission" value="" name="manage_transmission" class="txt">
                        <input type="text" required="" placeholder="Enter location" value="" name="manage_location" class="txt">
                        <input type="text" required="" placeholder="Enter Mileage" value="" name="manage_mileage" class="txt">
                        <input type="text" required="" placeholder="Price" value="" name="price" class="txt">
                        <input type="file" id="myFile" placeholder="Upload Img" class="form-control input-md"  name="car_img">
                       

                        <input type="submit" value="submit" name="submit" class="txt2">
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>