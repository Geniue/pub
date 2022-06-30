<div class="callback-desktop-only">
    <div class="request-form-header">
        Callback request
    </div>
    <div class="request-form-holder">
        {{isset($mail_resp) ? $mail_resp:'' }}
        <form method="post" action="/">
            <div style="display: none;"><input type="hidden" name="request-callback" value=""></div>
            <div class="mb-2">
                <label for="fyourname">Your phone number</label>
                <input id="fyourname" class="" type="number" name="your-number" placeholder="" required>
            </div>
            <div class="mb-2">
                <label for="fneedservice">What do you need cleaned?</label>
                <input id="fneedservice" class="" type="text" name="need-service" placeholder="" required>
            </div>
            <div>
                <button class="btn" type="submit" name="request-callback" aria-label="Request callback">Request callback</button>
            </div>
        </form>
    </div>
</div>
