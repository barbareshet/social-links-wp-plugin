<?php



// Create the Menu link

function csl_options_menu_link(){
    add_options_page('Compass Social Footer Links', 'compass social footer links', 'manage_options', 'csl-options', 'csl_options_content');
    
}

//Create Options page content
function csl_options_content(){
    
// init global variable for options

global $csl_options;

    ob_start();?>

    <div class="wrap">
        <h2><?php _e('Compass Social Footer Links', 'csl_domain') ;?></h2>
        <p>
            <?php _e('Settings For the Social Footer Links Plugin', 'csl_domain') ;?>
        </p>
        <form action="options.php" method="post">

            <?php settings_fields('csl_settings_gruop') ;?>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="csl_settings[enable]">
                                    <?php _e('Enable Social Links', 'csl_domain') ;?>
                                </label>
                            </th>
                            <td>
                                <input type="checkbox" name="csl_settings[enable]" value="1" <?php checked( '1', $csl_options[ 'enable']) ;?> id="csl_settings[enable]">
                            </td>
                        </tr>
                        
                            <th>
                                <?php echo _e('Facebook Settings', 'csl_domain');?>
                            </th>
                            
                                <tr>
                                    <th scope="row">

                                        <label for="csl_settings[facebook_url]">
                                            <?php _e('Facebook Page URL', 'csl_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="csl_settings[facebook_url]" value="<?php echo $csl_options['facebook_url'] ;?>" id="csl_settings[facebook_url]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Enter facebook page URL', 'csl_domain');?>
                                        </p>
                                    </td>
                                </tr>
                        <!--/ Facebook link settings-->
                        
                            <th>
                                <?php echo _e('Google Plus Settings', 'csl_domain');?>
                            </th>
                            
                                <tr>
                                    <th scope="row">

                                        <label for="csl_settings[google_plus_url]">
                                            <?php _e('Google Business Page URL', 'csl_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="csl_settings[google_plus_url]" value="<?php echo $csl_options['google_plus_url'] ;?>" id="csl_settings[google_plus_url]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Google Business Page URL', 'csl_domain');?>
                                        </p>
                                    </td>
                                </tr>
                                
                            
                       
                        <!--/ Google +  link settings-->
                        
                            <th>
                                <?php echo _e('Twitter Settings', 'csl_domain') ;?>
                            </th>
                           
                                <tr>
                                    <th scope="row">

                                        <label for="csl_settings[twitter_url]">
                                            <?php _e('Twitter Profile URL', 'csl_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="csl_settings[twitter_url]" value="<?php echo $csl_options['twitter_url'] ;?>" id="csl_settings[twitter_url]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Twitter Profile URL', 'csl_domain');?>
                                        </p>
                                    </td>
                                </tr>
                               <!--/ Twitter  link settings-->
                               
                            <th>
                                <?php echo _e('Yelp Settings', 'csl_domain') ;?>
                            </th>
                           
                                <tr>
                                    <th scope="row">

                                        <label for="csl_settings[yelp_url]">
                                            <?php _e('Yelp Page URL', 'csl_domain') ;?>
                                        </label>
                                    </th>
                                    <td>
                                        <input type="text" name="csl_settings[yelp_url]" value="<?php echo $csl_options['yelp_url'] ;?>" id="csl_settings[yelp_url]" class="regular-text" />
                                        <p class="description">
                                            <?php _e('Yelp Page URL', 'csl_domain');?>
                                        </p>
                                    </td>
                                </tr>
                               <!--/ Yelp  link settings-->
                            
                        

                    </tbody>

                </table>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'csl_domain') ;?>">
                </p>
        </form>
    </div>

    <?php

echo ob_get_clean();

}

add_action('admin_menu','csl_options_menu_link');

//register the settings

function csl_register_settings(){
    register_setting('csl_settings_gruop', 'csl_settings');
    
}
add_action('admin_init', 'csl_register_settings');