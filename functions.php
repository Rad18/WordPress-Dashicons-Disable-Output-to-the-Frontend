/** Remove Dashicons from Admin Bar for non logged in users **/
add_action('wp_print_styles', 'jltwp_adminify_remove_dashicons', 100);

/** Remove Dashicons from Admin Bar for non logged in users **/
function jltwp_adminify_remove_dashicons()
{
    if (!is_admin_bar_showing() && !is_customize_preview()) {
        wp_dequeue_style('dashicons');
        wp_deregister_style('dashicons');
    }
}
