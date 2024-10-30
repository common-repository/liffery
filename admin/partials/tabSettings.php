<?php if ($verifiedJustNow) { ?>
    <?php if ($validationError) { ?>
    <div class="notice notice-error settings-error">
      <p>Sorry, there was something wrong with the code you provided: <?php echo esc_html($code); ?></p>
      <p>Please fetch a new code from your Liffery for Business account and try again.</p>
      <p>Please also check the domain registered on Liffery equals: <b><?php echo esc_html($siteURL); ?></b></p>
    </div>
    <?php } ?>

    <?php if ($validated) { ?>
    <div class="notice notice-success settings-error">
      <br/>
      Congratulations! You have just successfully verified your Liffery Business account<br/>
      <br/>
    </div>
    <?php } ?>
<?php } ?>

<blockquote>
  <p>
    To verify this domain with Liffery please add the related verification code into the form below.<br/>

    The verification code can be found in your Liffery for Business admin area:
    <a href="https://accounts.liffery.com/domain-validation" target="_blank">https://accounts.liffery.com/domain-validation</a><br/>
  </p>
  <p>
    (if your domain has changed you will need to re-verify, please use the same process again)
  </p>
</blockquote>

<form action="" method="post" id="validateForm">
  <input type="hidden" name="action" value="validate">
  <table class="form-table">
    <tr>
      <th>
        <label for="liffery-code">Liffery Verification Code:</label>
      </th>
      <td>
        <input id="liffery-code"
               name="validationCode"
               type="text"
               placeholder="eg sd7fsidfsds...."
               class="regular-text"
               value=""/>
      </td>
    </tr>
    <tr>
      <th>
        <label for="liffery-submit">Verify your code:</label>
      </th>
      <td>
        <input
            id="liffery-submit"
            type="submit"
            name="submit"
            value="Verify"
            class="button button-primary"
        />
        <input
            style="display: none"
            id="liffery-submit-loading"
            type="button"
            name="submit"
            value="Verify (loading...)"
            class="button button-primary"
        />
      </td>
    </tr>
  </table>
</form>

<script>
  var $ = jQuery;
  $('#liffery-submit').on('click', function () {
    $(this).hide();
    $('#liffery-submit-loading').show();
  });
</script>
