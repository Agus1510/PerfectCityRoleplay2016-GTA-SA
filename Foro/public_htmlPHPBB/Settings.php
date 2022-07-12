<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2011 Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.0
 */

########## Maintenance ##########
# Note: If $maintenance is set to 2, the forum will be unusable!  Change it to 0 to fix it.
$maintenance = 1;		# Set to 1 to enable Maintenance Mode, 2 to make the forum untouchable. (you'll have to make it 0 again manually!)
$mtitle = 'MANTENIMIENTO';		# Title for the Maintenance Mode message.
$mmessage = 'Estamos intentando levantar el foro, paciencia';		# Description of why the forum is in maintenance mode.

########## Forum Info ##########
$mbname = 'Platinum Roleplay';		# The name of your forum.
$language = 'spanish_latin';		# The default language file set for the forum.
$boardurl = 'http://platinum-rp.com';		# URL to your forum's folder. (without the trailing /!)
$webmaster_email = 'manuelbayordguez@gmail.com';		# Email address to send emails from. (like noreply@yourdomain.com.)

########## Database Info ##########
$db_type = 'mysql';
$db_server = '192.168.0.194';
$db_name = 'plati354_foro';
$db_user = 'plati354_foro';
$db_passwd = 'caca';
$ssi_db_user = 'Klaus_McConnor';
$ssi_db_passwd = 'asd';
$db_prefix = 'smf_';
$db_persist = 0;
$db_error_send = 0;

########## Directories/Files ##########
# Note: These directories do not have to be changed unless you move things.
$boarddir = '/home/u265055033/public_html';		# The absolute path to the forum's folder. (not just '.'!)
$sourcedir = '/home/u265055033/public_html/Sources';		# Path to the Sources directory.
$cachedir = '/home/u265055033/public_html/cache';		# Path to the cache directory.

########## Error-Catching ##########
# Note: You shouldn't touch these settings.
$db_last_error = 0;


# Make sure the paths are correct... at least try to fix them.
if (!file_exists($boarddir) && file_exists(dirname(__FILE__) . '/agreement.txt'))
	$boarddir = dirname(__FILE__);
if (!file_exists($sourcedir) && file_exists($boarddir . '/Sources'))
	$sourcedir = $boarddir . '/Sources';
if (!file_exists($cachedir) && file_exists($boarddir . '/cache'))
	$cachedir = $boarddir . '/cache';

?>