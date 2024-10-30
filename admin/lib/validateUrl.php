<?php

function liffery_httpGetStatusIs200($path)
{
    $origin   = 'https://www.liffery.com';
    $url      = $origin . $path;
    $response = wp_remote_get($url);

    return $response['response']['code'] === 200;
}

function liffery_validateUrl($webPath)
{
    return liffery_httpGetStatusIs200('/__/ms-business-account-mgmt/validate/domain?url=' . urlencode($webPath));
}

function liffery_urlIsValidated($url)
{
    return liffery_httpGetStatusIs200('/__/ms-business-account-mgmt/validate/domain/status?url=' . urlencode($url));
}