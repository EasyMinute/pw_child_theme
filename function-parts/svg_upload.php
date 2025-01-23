<?php
function allow_svg_upload($mime_types) {
    $mime_types['svg'] = 'image/svg+xml'; // Allow SVG uploads
    return $mime_types;
}
add_filter('upload_mimes', 'allow_svg_upload');

function sanitize_svg_on_upload($file) {
    if ($file['type'] === 'image/svg+xml') {
        // Add your sanitization logic here (e.g., use SVG Sanitizer library)
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'sanitize_svg_on_upload');

function display_svg_in_media_library($response, $attachment, $meta) {
    if ($response['type'] === 'image' && $response['subtype'] === 'svg+xml') {
        $response['sizes'] = [
            'full' => [
                'url' => $response['url'],
            ],
        ];
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'display_svg_in_media_library', 10, 3);

