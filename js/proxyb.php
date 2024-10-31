<?php
/*
  Plugin Name: Proxy B Movement
  Description: When someone uses a web proxy to browse your website or blog, Proxy B Movement informs the visitor to get another proxy i.e. Hepatitis B vaccination. Install the plugin to join the proxy war against Hepatitis B.
  Version: 1.2
  Author: Rupesh Mandal, Rajinder Deol
  Author URI: https://www.proxyb.org
  Contributors: rupesh-mandal ( https://www.rupeshmandal.com )
  License: GNU General Public License, v2 (or newer)
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

// Get the current website’s domain name
 $siteUrl = site_url();
 $parsedUrl = str_ireplace('www.', '', parse_url($siteUrl, PHP_URL_HOST));
?>

/**
 * Set mydomain as the domain name of visited website
 */
<script type="text/javascript">
var mydomain = '<?php echo $parsedUrl; ?>';
</script>