<style type="text/css">
    .s-header-v2__nav-link {
        color: rgba(34, 35, 36, 0.7);
    }
    header {
        display: none;
    }
    .s-header-v2__nav-link:hover{
        color: #2ab8d2;
    }
    .mod-login {
        background: url(<?php echo base_url();?>assets/img/1920x1080/07.jpg) 50% 0 no-repeat fixed;
        padding-bottom: 100px;
        padding-top: 100px;
        margin-top: -10px;
    }
    a.i-have-account {
        background-color: #0b6a7b;
        color: white;
    }
    #f-login, #f-signup{
        transition: 500;
    }

</style>

<!-- Subscribe -->
<div class="js__parallax-window mod-login">
    <div class="container g-padding-y-30--xs">
        <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
            <div class="col-lg-6 col-sm-6 g-hor-centered-row__col g-text-center--xs g-text-left--md g-margin-b-60--xs g-margin-b-0--md">
                <div class="s-promo-block-v1__square-effect g-margin-b-60--xs">
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" style="margin-bottom: 20px; width: 160px">
                    <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Be a Great Person<br>Caring and Helping</h1>
                    <p class="g-font-size-20--xs g-font-size-26--md g-color--white g-margin-b-0--xs">Join to be donator or make a goodness <br> campaign for helping people.</p>
                </div>
                <span class="g-display-block--xs g-display-inline-block--lg g-margin-b-10--xs g-margin-b-10--lg hide">
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                        <span class="s-btn__element--left">
                            <i class="g-font-size-32--xs ti-apple"></i>
                        </span>
                        <span class="s-btn__element--right g-padding-x-10--xs">
                            <span class="g-display-block--xs g-font-size-11--xs">Download on the</span>
                            <span class="g-font-size-16--xs">App Store</span>
                        </span>
                    </a>
                </span>
                <span class="g-padding-x-0--xs g-padding-x-10--lg">
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                        <span class="s-btn__element--left">
                            <i class="g-font-size-32--xs ti-android"></i>
                        </span>
                        <span class="s-btn__element--right g-padding-x-10--xs">
                            <span class="g-display-block--xs g-font-size-11--xs">Download on</span>
                            <span class="g-font-size-16--xs">Google Play</span>
                        </span>
                    </a>
                </span>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 col-sm-6 g-hor-centered-row__col">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <form id="f-signup" class="center-block g-bg-color--primary g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4"
                            role="form" action="<?php echo base_url('index.php/user/store'); ?>"  method="post">
                        <div class="g-text-center--xs g-margin-b-40--xs">
                            <h2 class="g-font-size-30--xs g-color--white">Signup to Heaven Now!</h2>
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="name" name="name" class="form-control s-form-v3__input" placeholder="* Your Name" required="">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="email" name="email" class="form-control s-form-v3__input" placeholder="* Email" required="">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="phone" name="phone" class="form-control s-form-v3__input" placeholder="* Phone">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="password" name="password" id="v-password" class="form-control s-form-v3__input" placeholder="* Password" required="">
                        </div>
                         <div class="g-margin-b-30--xs">
                            <input type="password" id="v-password-2" class="form-control s-form-v3__input" placeholder="* Re-type Password" required="">
                        </div>
                        <div class="g-text-center--xs">
                            <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">GO</button>
                            <a id="b-to-login" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs i-have-account">I already have account</a>
                        </div>
                    </form>
                    <form id="f-login" class="center-block g-bg-color--primary g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4"
                            role="form" action="<?php echo base_url('index.php/user/do_login'); ?>"  method="post">
                        <div class="g-text-center--xs g-margin-b-40--xs">
                            <h2 class="g-font-size-30--xs g-color--white">Login to your Heaven!</h2>
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="email" name="email" class="form-control s-form-v3__input" placeholder="* Email" required="">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="password" name="password" class="form-control s-form-v3__input" placeholder="* Password" required="">
                        </div>
                        <div class="g-text-center--xs">
                            <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs ">GO</button>
                            <a class="g-color--white g-font-size-13--xs" href="#" style="margin-top: 10px; display: block;">Forgot your password?</a>
                            <a id="b-to-signup" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs i-have-account" style="margin-top: 30px">I don't have an account :(</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#f-signup').hide(500);
        $('#b-to-login').click(function(){
            $('#f-signup').hide(300);
            $('#f-login').show(300);
        });
        $('#b-to-signup').click(function(){
            $('#f-signup').show(300);
            $('#f-login').hide(300);
        });
    });
</script>
<!-- End Subscribe -->
