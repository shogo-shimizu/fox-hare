<?php

function leftFukidashi($atts, $content = null)
{
    $getUri = get_template_directory_uri();
    return
    '<div class="oneArea">
    <div class="onebox oneboxLeft">
      <div class="imgArea"><img src="' . $getUri .
        '/assets/images/fox.png" alt="hare"></div>
      <div class="fukiArea"><div class="fukidasi">'.
      esc_html($content)
      .'</div></div>
    </div>
  </div>';

}
function rightFukidashi($atts, $content = null)
{
    $getUri = get_template_directory_uri();
    return
    '<div class="oneArea">
    <div class="onebox oneboxRight">
      <div class="imgArea"><img src="' . $getUri .
        '/assets/images/hare.png" alt="hare"></div>
      <div class="fukiArea"><div class="fukidasi">'.
      esc_html($content)
      .'</div></div>
    </div>
  </div>';

}
add_shortcode('leftFukidashi','leftFukidashi');
add_shortcode('rightFukidashi','rightFukidashi');

function test(){
    ob_start();
    echo the_title();
    return ob_get_clean();
}
add_shortcode('test', 'test');