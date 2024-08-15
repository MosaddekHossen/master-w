<?php
// master_logo
function master_logo()
{
    $logo_url = get_theme_mod('logo_url', get_template_directory_uri() . '/assets/img/logo.png');
?>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo bloginfo(); ?>" />
    </a>
<?php
}
