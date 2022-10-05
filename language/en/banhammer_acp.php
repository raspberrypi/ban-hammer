<?php
/**
*
* @package Ban Hammer
* @copyright (c) 2015 phpBB Modders <https://phpbbmodders.net/>
* @author Jari Kanerva
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'ACP_BAN_EMAIL'		=> 'Ban user\'s email address',
	'ACP_BAN_IP'		=> 'Ban user\'s IP address',
	'ACP_BAN_IP_EXPLAIN'	=> '<strong>Be careful with this.</strong> Most home users have dynamic IP addresses and only need to reboot their router to get a new IP address. The banned IP address might next be assigned to a user you want on the forums. Spammers also use internet anonymity proxies or the Tor network, making an IP ban pointless.',

	'ACP_DEL_AVATAR'	=> 'Delete user\'s avatar',
	'ACP_DEL_PRIVMSGS'	=> 'Delete user\'s private messages',
	'ACP_DEL_POSTS'		=> 'Delete user\'s posts',
	'ACP_DEL_PROFILE'	=> 'Delete user\'s profile fields',
	'ACP_DEL_SIGNATURE'	=> 'Delete user\'s signature',

	'ACP_GROUP_MISSING'	=> 'The group &quot;%s&quot; does not exist.', // %s is the group name.

	'ACP_MOVE_GROUP'			=> 'Move to group',
	'ACP_MOVE_GROUP_EXPLAIN'	=> 'Name of the group to which banned users should be moved. This will also be their default group.<br /><strong>If nothing but <em>“No group specified.”</em> is in the drop-down, then no groups have been set up.</strong>',
	'BAN_LENGTH_EXPLAIN'	=> 'If either of the ban options is set then the user will be banned for the amount of time set here.',
	'SETTINGS_ERROR'		=> 'There was an error saving your settings. Please submit the backtrace with your error report.',
	'SFS_API_KEY'			=> 'SFS API key',
	'SFS_API_KEY_EXPLAIN'	=> 'If you want to report spammers automatically to Stop Forum Spam you need an API key: <a href="http://www.stopforumspam.com/signup">http://www.stopforumspam.com/signup</a>.',
	'SFS_NEEDS_CURL'		=> '<span style="color:red;">Your server needs cURL installed to use the Stop Forum Spam service.</span>',
));
