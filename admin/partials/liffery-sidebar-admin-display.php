<?php
require_once(__DIR__ . '/../lib/copyImageToMediaLib.php');
require_once(__DIR__ . '/../lib/validateUrl.php');

$code            = '';
$verifiedJustNow = false;
$validationError = false;
$validated       = false;

if (current_user_can('administrator')) {
    switch (sanitize_text_field($_POST['action'])) {
        case 'validate':
            // 1 get validation code
            $code = sanitize_text_field($_POST['validationCode']);
            $re   = '/^[\w\d]{60}$/';
            $validationError = true;
            if (preg_match($re, $code) === 1) {
                // 2 write png to disk
                $from    = __DIR__ . '/../images/liffery.png';
                $webPath = liffery_copyImageToMediaLib($from, $code . '.png');

                // 3 call liffery to get the png
                if (liffery_validateUrl($webPath)) {
                    $validated       = true;
                    $validationError = false;
                }
            }
            $verifiedJustNow = true;

            break;
    }
    if ($validated === false) {
        $validated = liffery_urlIsValidated(get_site_url());
    }
}
$siteURL         = get_site_url();
$tab             = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : '';
$statusTabActive = $tab === '' ? 'nav-tab-active' : null;
$settingsActive  = $tab === 'settings' ? 'nav-tab-active' : null;
?>

<div class="wrap liffery">
  <h1>
      <?php echo esc_html(get_admin_page_title()); ?>
  </h1>

  <nav class="nav-tab-wrapper">
    <a href="?page=liffery" class="nav-tab <?php echo esc_attr($statusTabActive); ?>">Status</a>
    <a href="?page=liffery&tab=settings" class="nav-tab <?php echo esc_attr($settingsActive); ?>">Settings</a>
  </nav>

  <div style="margin-top: 2rem;margin-left: 2rem;">
      <?php
      if ($statusTabActive) {
          require_once(__DIR__ . '/tabStatus.php');
      } else {
          require_once(__DIR__ . '/tabSettings.php');
      }
      ?>
  </div>
</div>
