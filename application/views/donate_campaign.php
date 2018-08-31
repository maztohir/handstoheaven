<!--========== PAGE CONTENT ==========-->
<!-- Features -->
<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
    <div class="row margin-bottom-16">
        <div class="col-xs-12 col-sm-5 col-md-4">
            <div class="wow fadeInUp margin-bottom-16" data-wow-duration=".3" data-wow-delay=".2s">
                <div class="holder-fund">
                    <div class="img-header-fund">
                        <img src="<?php echo base_url().'assets/img/h/'.$campaign->foto_utama; ?>" class="img-responsive border-top-radius">
                    </div>
                    <div class="description-fund border-bottom-radius">
                        <h4 class="title font-size-24"><?php echo $campaign->judul ?></h4>
                        <p class="font-size-16"><?php echo $campaign->deskripsi_singkat ?></p>
                        <div class="divider"></div>
                        <div class="flex">
                            <div class="flex-1 font-size-16">
                                <img src="https://kitabisa-userupload-01.s3-ap-southeast-1.amazonaws.com/_production/user/591165/23_591165_1518163089_18337_a.jpg"
                                class="circle-img-campaigner">
                                Yayasan AFN <img class="icon-verified" src="<?php echo base_url(); ?>assets/img/icon/icon__verified-org.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white border-radius padding-20 margin-bottom-16">
                <div class="">
                    <span class="font-size-24 text-bold">Rp. 9,240</span>
                    <br><span class="font-size-14">Raised from target Rp. 2 Miliyar</span> 
                </div>
                <div class="fund-process">
                    <div class="progress height-9">
                        <div class="progress-bar height-9" style="width: 84%"></div>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-1">
                        <span class="font-size-16"> 84% Raised</span> 
                    </div>
                    <span class="font-size-16"> 26 Days left</span> 
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-8 margin-bottom-16">
            <div class="bg-white border-radius padding-20 margin-bottom-16">
                <h4 class="text-bold font-size-24">How to donate :</h4>
            </div>
            <div class="bg-white border-radius padding-20 margin-bottom-16">
                <h5 class="text-bold font-size-14">1. Transfer to Heaven's bank accounts here</h5>
                <div class="padding-20 bg-white flex border-top" style="padding-bottom: 0px">
                    <img class="icon-bank" src="<?php echo base_url(); ?>assets/img/icon/icon-bri.png">
                    <p class="flex-1 line-height-small">
                        <span class="text-bold c-black">0122.01.002451.30.2</span><br/>
                        <span class="font-size-11">A/n. YAYASAN ABADI FIRDAUS NUSANTARA</span>
                    </p>
                </div>
            </div>
            <form action="<?php echo base_url('index.php/user/do_login'); ?>"  method="post">
                <div class="bg-white border-radius padding-20 margin-bottom-16">
                    <h5 class="text-bold font-size-14 margin-bottom-16">2. Please fill this field to confirm your transaction is well done</h5>
                    <div class="border-top" style="padding-top: 15px">
                        <input type="hidden" name="id" value="<?php echo $campaign->id; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $campaign->id; ?>">
                        <input type="number" class="form-control s-form-v2__input" placeholder="* Total Amount" required="">
                        <input type="file" style="padding-top: 20px" class="form-control s-form-v2__input" required="">
                    </div>
                </div>
                <div class="bg-white border-radius padding-20 margin-bottom-16">
                    <h5 class="text-bold font-size-14">3. Press this button to finish your donation</h5>
                    <button  type="submit" class="bg-tradic border-radius padding-20 btn text-btn block text-bold" style="margin-top: 20px; width: 100%">
                        I've Done donate for my heaven
                    </button>
                </div>
            </form>
            <div class="bg-white border-radius padding-20 margin-bottom-16">
                <span class="font-size-14">Ask everyone you love to go to heaven together!</span>
                <div class="btn-fb border-radius block" style="padding: 7px; text-align: center; margin-top: 10px;">
                    <i class="fab fa-facebook-f" style="margin-right: 10px"> </i><span>Share</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#body').css('background-color','#f3f3f3');
    });
</script>
        