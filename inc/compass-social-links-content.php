<?php


function csl_add_footer($content){
    
    global $csl_options;
    
    $footer_output = '<hr>';
    $footer_output .= '<div class="csl-footer-links">' ;
    $footer_output .= '<h4>'.  __('Get Social With Us', 'csl_domain') . '</h4>';
    $footer_output .= '<ul id="csl-footer-links-list">';
    if(!empty($csl_options['facebook_url'])){
       $footer_output .= '<li class="social-link" id="facebook"><a href="'. $csl_options['facebook_url'] .'" target="_blank"><i class="fa fa-facebook"></i></a></li>'; 
    }
        if(!empty($csl_options['twitter_url'])){
        $footer_output .= '<li class="social-link" id="twitter"><a href="'. $csl_options['twitter_url'] .'" target="_blank"><i class="fa fa-twitter"></i></a></li>'; 
    }
   if(!empty($csl_options['google_plus_url'])){
       $footer_output .= '<li class="social-link" id="google"><a href="'. $csl_options['google_plus_url'] .'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
   }
    if(!empty($csl_options['yelp_url'])){
     $footer_output .= '<li class="social-link" id="yelp"><a href="'. $csl_options['yelp_url'] .'" target="_blank"><i class="fa fa-yelp"></i></a></li>';   
    }
    $footer_output .= '</ul>';
    $footer_output .= '</div>';
    
    //Enable / disable social links in feed
    
        if(is_single() || is_page() && $csl_options['enable']){
        return $content . $footer_output;
    
    }else{
         return $content;
    }
    
   
}

add_filter('the_content', 'csl_add_footer');
