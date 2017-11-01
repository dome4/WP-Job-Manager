<?php
/**
 * Apply using link to website.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-application-url.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<p><?php echo 'Um Dich für diesen Job zu bewerben, besuche bitte die folgende Website: '; ?> <a href="<?php echo esc_url( $apply->url ); ?>" target="_blank" rel="nofollow"><?php echo esc_html( $apply->url ); ?> &rarr;</a></p>