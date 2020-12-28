<section class="banner banner-secondary" id="top" style="background-image: url(asset/img/banner-image-3-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Buy</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                <div class="row">
				<div class="col-lg-12">
					<form action="<?php echo base_url()?>buy-we" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="buy_model" placeholder="Car Model Name" required data-error="">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>

							
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Customer Name" id="email" class="form-control" name="buy_name" required data-error="">
									<div class="help-block with-errors"></div>
								</div> 
							</div>


							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Customer Address" id="email" class="form-control" name="buy_address" required data-error="">
									<div class="help-block with-errors"></div>
								</div> 
							</div>


							<div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Customer Number" id="email" class="form-control" name="buy_number" required data-error="">
									<div class="help-block with-errors"></div>
								</div> 
							</div>

						
							
								<div class="submit-button text-center">
									<button class="btn btn-primary" id="submit" type="submit">BUY</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>     
                </div>
            </div>
        </section>

        
    </main>