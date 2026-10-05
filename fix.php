<?php
$content = file_get_contents('wp-config.php');
$replacement = <<<PHP
\$protocol = (isset(\$_SERVER['HTTPS']) && \$_SERVER['HTTPS'] === 'on') || (isset(\$_SERVER['HTTP_X_FORWARDED_PROTO']) && \$_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https' : 'http';
if (isset(\$_SERVER['HTTP_X_FORWARDED_PROTO']) && \$_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') { \$_SERVER['HTTPS'] = 'on'; }
define('WP_HOME', \$protocol . '://' . \$_SERVER['HTTP_HOST'] . '/s24/demoweb');
define('WP_SITEURL', \$protocol . '://' . \$_SERVER['HTTP_HOST'] . '/s24/demoweb');
/* That's all, stop editing! Happy publishing. */
PHP;
$content = preg_replace('/if \(isset\(\$_SERVER.+?\/\* That\'s all, stop editing! Happy publishing\. \*\//s', $replacement, $content);
file_put_contents('wp-config.php', $content);
echo "Fixed!";
