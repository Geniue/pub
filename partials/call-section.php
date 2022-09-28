<?php
$baseUrl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$baseUrl.= $_SERVER['HTTP_HOST'];
?>

<style>

</style>

<section class="py-2" id="white-bg">
    <div class="container" id="callback-request-submit">
        <div class="row">
            <div class="col-md-6 need-cc">
                <h4 class="fw-bold fs-4 fs-md-auto mb-0" style="color: #2baf38;
}">What Services You Need?</h4>
                <div class="input-fields">
                    <div role="form" class="" id="" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/#callback-request-submit" method="post" onsubmit="this.querySelector('.ajax-loader').style.visibility='visible'">
                            <div style="display: none;"><input type="hidden" name="_wpcf7" value="2540"><input type="hidden" name="_wpcf7_version" value="4.4.1"><input type="hidden" name="_wpcf7_locale" value="en_US"><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2540-o1"><input type="hidden" name="_wpnonce" value="8c925b5b41"></div>
                            <p class="mb-2">
                                  <span class="your-number">
                                    <input  type="number" name="your-number" value="" class="text-phone  mb-0" id="postalcode" aria-required="true" aria-invalid="false" placeholder="Phone Number" required>
                                  </span>
                            </p>

                            <?php echo isset( $mail_resp ) ? $mail_resp : '' ; ?>

                            <p>
                                <input type="submit" name="request-submit" value="We Will Call You Back!" id="number-call" class="wpcf7-form-control wpcf7-submit btn-submit" style="border-top-right-radius: 29px;
border-top-left-radius: 29px; background-color: #2baf38;">
                            </p>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mobile-image d-flex justify-content-center"><img rel="canonical"  class="lazy" src="<?php echo $baseUrl; ?>/assets/images/pexels-los-muertos-crew-10041243-PhotoRoom2.png" data-src="<?php echo $baseUrl; ?>pexels-los-muertos-crew-10041243-PhotoRoom2.png" alt="Call Carpet Cleaner NYC NOw" width="416" height="399"></div>
            </div>
        </div>
    </div>
</section>
