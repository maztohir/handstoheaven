<!--========== PAGE CONTENT ==========-->
<!-- Features -->
<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row">

        <?php foreach ($campaigns->result() as $key): ?>
            
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 margin-bottom-16">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                    <!-- Team -->
                    <div class="holder-fund">
                        <div class="img-header-fund">
                            <a href="<?php echo base_url(); ?>index.php/campaign/"><img src="<?php echo base_url().'assets/img/h/'.$key->foto_utama; ?>" class="img-responsive border-top-radius"></a>
                        </div>
                        <div class="description-fund border-bottom-radius">
                            <a class="link" href="<?php echo base_url().'index.php/campaign/detail/'.$key->short_name.'/'.(($key->id+982398)*231) ?>"><h4 class="title"><?php echo $key->judul ?></h4></a>
                            <div class="divider"></div>
                            <div class="flex">
                                <div class="flex-1 font-size-12">
                                    Yayasan AFN <img class="icon-verified" src="<?php echo base_url(); ?>assets/img/icon/icon__verified-org.svg">
                                </div>
                            </div>
                            <div class="fund-process">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 84%"></div>
                                    <span class="progress-val bar-tooltip">84% from Rp. 2 Miliyar</span>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-1">
                                    Raised <br><span class="font-size-14"> Rp. 9,240</span> 
                                </div>
                                <div class="inlinex right-align">
                                    Days left <br><span class="font-size-14"> 15</span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#body').css('background-color','#f3f3f3');
    });
</script>
<!-- End Features -->