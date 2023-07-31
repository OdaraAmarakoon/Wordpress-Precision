<?php
// Get the Video Fields
$video_mp4 =  get_field('mp4_video'); // MP4 Field Name
$video_webm  = get_field('webm_video'); // WEBM Field Name
$video_flv =  get_field('flv_video'); // FLV Field Name
$video_poster  = get_field('poster_image'); // Poster Image Field Name
                

// Build the  Shortcode
$attr =  array(
'mp4'      => $video_mp4,
'webm'     => $video_webm,
'flv'      => $video_flv,
'poster'   => $video_poster,
'preload'  => 'auto'
);

// Display the Shortcode
echo wp_video_shortcode(  $attr );
?>