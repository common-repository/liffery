<?php
/**
 * @param $fromPath       string The file path to copy
 * @param $toFilename     string The new file name
 *
 * @return string The web url to the new file
 */
function liffery_copyImageToMediaLib($fromPath, $toFilename)
{
    $from      = path_join(
            $_SERVER['DOCUMENT_ROOT'],
            $fromPath
    );
    $image_url = $from;

    $upload_dir = wp_upload_dir();

    $filename = basename($image_url);
    $file     = path_join($upload_dir['basedir'], $toFilename);

    copy($from, $file);

    $wp_filetype = wp_check_filetype($toFilename, null);

    $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name($filename),
            'post_content'   => '',
            'post_status'    => 'inherit',
    );

    $attach_id = wp_insert_attachment($attachment, $file);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $file);
    wp_update_attachment_metadata($attach_id, $attach_data);

    return wp_get_attachment_url($attach_id);
}