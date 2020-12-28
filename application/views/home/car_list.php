<section class="banner banner-secondary" id="top" style="background-image: url(asset/img/banner-image-1-1920x300.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Cars</h2>
                </div>
            </div>
        </div>
    </div>
</section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <?php foreach($car_info as $row){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <div class="thumb-img">
                                    <img src="<?php echo $row->car_img; ?>" alt="">
                                </div>
                                <div class="overlay-content">
                                  <strong><i class="fa fa-dashboard"></i><?php echo $row->manage_mileage.'km'; ?></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                  <strong><i class="fa fa-cube"></i> <?php echo $row->manage_myear; ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                  <strong><i class="fa fa-cog"></i> <?php echo $row->manage_transmission; ?></strong>
                                  
                                </div>
                            </div>
                            <div class="down-content">
                                <h4><?php echo $row->manage_name; ?></h4>

                                <br>

                                <p><?php echo $row->manage_model; ?></p>
                                <p>Location: <?php echo $row->manage_location; ?></p>

                                <p><span> <strong>BDT <sup></sup><?php echo $row->price; ?></strong></span></p>

                               
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    
                </div>
            </div>
        </section>
    </main>