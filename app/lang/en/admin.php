<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Administration Language Lines
	|--------------------------------------------------------------------------
	|
	| The following are localized texts that are used for admin pages
	|
	*/

	"dashboard"             => "Dashboard",
	"site_settings"         => "Site settings",
	"manage_pastes"         => "Manage pastes",
	"manage_users"          => "Manage users",
	"ban_an_ip"             => "Ban an IP",
	"mail_settings"         => "Mail settings",
	"authentication"        => "Authentication",
	"auth_settings"         => "Authentication settings",
	"spam_filters"          => "Spam filters",
	"skin_chooser"          => "Skin chooser",
	"services"              => "Services",
	"field"                 => "Field",
	"value"                 => "Value",
	"save_all"              => "Save all",
	"posted_at"             => "Posted at",
	"expires_at"            => "Expires at",
	"is_private"            => "Is private",
	"has_password"          => "Has password",
	"poster_ip"             => "Poster's IP",
	"remove_password"       => "Remove password",
	"remove_attachment"     => "Remove attachment",
	"attachment_deleted"    => "The attachment has been removed successfully",
	"paste_exp"             => "Enter the paste ID above and click search",
	"paste_404"             => "No paste found with the given ID",
	"user_404"              => "No user found with the given username",
	"user_editor"           => "User editor",
	"user_saved"            => "The user has been saved successfully",
	"user_deleted"          => "The user has been deleted successfully",
	"user_del_fail"         => "You cannot delete this user",
	"user_create"           => "Create new user",
	"user_auth_method"      => "Users created by the %s auth method cannot be modified ".
	                           "using this module.",
	"ip_address"            => "IP address",
	"ban"                   => "Ban",
	"unban"                 => "Unban",
	"no_banned_ip"          => "There are no banned IP addresses",
	"ip_banned"             => "IP address added to ban list",
	"ip_unbanned"           => "IP address removed from ban list",
	"mail_updated"          => "Mail settings updated successfully",
	"driver"                => "Driver",
	"smtp_host"             => "SMTP host",
	"smtp_port"             => "SMTP port",
	"from_address"          => "From address",
	"from_name"             => "From name",
	"encryption"            => "Encryption",
	"smtp_username"         => "SMTP username",
	"smtp_password"         => "SMTP password",
	"sendmail_path"         => "Sendmail path",
	"smtp"                  => "SMTP",
	"mail"                  => "PHP mail",
	"sendmail"              => "Sendmail",
	"ssl"                   => "SSL",
	"tls"                   => "TLS",
	"test_mail_settings"    => "Test mail settings",
	"test_mail_success"     => "Mail server connectivity validated successfully",
	"test_mail_error"       => "Mail test failed: %s",
	"none"                  => "None",
	"fqdn"                  => "FQDN",
	"fqdn_exp"              => "The fully qualified domain name for the server. This is ".
	                           "used to determine the project level sub-domains.",
	"site_title"            => "Site title",
	"copyright"             => "Copyright",
	"copyright_exp"         => "This copyright notice will be displayed in your site's footer. You can ".
	                           "use HTML markup here.",
	"language"              => "Language",
	"ajax_nav"              => "AJAX mode",
	"ajax_nav_exp"          => "Enable AJAX to allow faster navigation and to save bandwidth.",
	"list_length"           => "List length",
	"list_length_exp"       => "Sets the number of items displayed per page in a list.",
	"paste_age"             => "Paste age",
	"paste_age_exp"         => "This is the default expiration time for pastes.",
	"expire_30mins"         => "30 minutes",
	"expire_6hrs"           => "6 hours",
	"expire_1day"           => "1 day",
	"expire_1week"          => "1 week",
	"expire_1month"         => "1 month",
	"expire_1year"          => "1 year",
	"expire_forever"        => "Keep forever",
	"expiration"            => "Expiration",
	"expiration_exp"        => "This setting determines the maximum age for pastes created on this site.",
	"noexpire_none"         => "Everyone must set a finite expiration time",
	"noexpire_user"         => "Registered users can create pastes that do not expire",
	"noexpire_all"          => "Every one can create pastes that do not expire",
	"ip_tracking"           => "IP tracking",
	"ip_tracking_exp"       => "Set this option to trust proxy headers if your site is behind a proxy ".
	                           "intermediary (such as a load balancer) to get the actual client IP address.",
	"trust_proxy"           => "Trust proxy headers",
	"ignore_proxy"          => "Ignore proxy headers",
	"visibility"            => "Visibility",
	"visibility_exp"        => "Public-only sites do not allow creating private or password protected pastes. ".
	                           "Private sites will create all pastes as 'private' and will disable the archives ".
	                           "sections.",
	"csrf_token"            => "CSRF token",
	"csrf_token_exp"        => "Validate form tokens across the site to prevent cross-site request forgery.",
	"guest_posts"           => "Guest posts",
	"guest_posts_exp"       => "If set to enabled, unregistered users will be able to create pastes and add ".
	                           "comments to pastes.",
	"allow_all"             => "Allow public and private pastes",
	"enforce_public"        => "Enforce public pastes",
	"enforce_private"       => "Enforce private pastes",
	"paste_search"          => "Paste search",
	"paste_search_exp"      => "Enable or disable paste search functionality on archives.",
	"comments_exp"          => "Allow users to comment on pastes.",
	"share"                 => "Sharing",
	"share_exp"             => "Allow users to share pastes by email.",
	"flagging"              => "Flagging",
	"flagging_exp"          => "Choose who can flag pastes for administrator review.",
	"flag_all"              => "Everyone",
	"flag_user"             => "Registered users",
	"flag_off"              => "Nobody",
	"delete_pastes"         => "Delete pastes",
	"delete_pastes_exp"     => "Allow users to delete their own pastes. Admins can always delete any pastes.",
	"attachment"            => "Attachment",
	"attachment_exp"        => "Allow users to attach an image to their paste.",
	"site_updated"          => "Site settings updated successfully",
	"word_censor"           => "Word censor",
	"word_censor_exp"       => "This module allows you to block pastes that contain specific words. ".
	                           "You can use * as a wildcard character.",
	"phrases"               => "Phrases",
	"phrases_exp"           => "Enter each censored phrase in a new line.",
	"stealth"               => "Stealth",
	"stealth_exp"           => "Stealth is an spam filter that limits the number of hyperlinks in a paste ".
	                           "when the language is selected as 'text'.",
	"noflood"               => "Flood control",
	"noflood_exp"           => "Drops pastes originating from the same user if it is posted before a ".
	                           "defined threshold duration.",
	"threshold"             => "Threshold",
	"threshold_exp"         => "Users will have to wait these many seconds between each paste.",
	"seconds"               => "seconds",
	"akismet"               => "Akismet",
	"akismet_exp"           => "Akismet is an automated spam filter that analyzes pastes and filters out ".
	                           "potential spam entries.",
	"akismet_key"           => "Akismet key",
	"akismet_key_exp"       => "You can get an Akismet API key from",
	"honeypot"              => "Honeypot",
	"honeypot_exp"          => "Project Honey Pot is a web based honeypot network which uses software ".
	                           "embedded in web sites to collect information about IP addresses used when ".
	                           "harvesting e-mail addresses for spam or other similar purposes such as ".
	                           "bulk mailing and e-mail fraud.",
	"honeypot_more"         => "Fore more information on these configuration values, check",
	"access_key"            => "Access key",
	"access_key_exp"        => "Get your access key at",
	"age_threshold"         => "Age threshold",
	"age_threshold_exp"     => "PHP responses older than these no. of days will be ignored.",
	"threat_score"          => "Threat score",
	"threat_score_exp"      => "IPs with PHP threat score greater than or equal to this will be disallowed.",
	"visitor_filter"        => "Visitor filter",
	"visitor_filter_exp"    => "Visitor type greater than or equal to this will be disallowed.",
	"enable_filter"         => "Enable this filter",
	"runs_on"               => "<b>Runs on:</b> %s",
	"max_links"             => "Max. links",
	"max_links_exp"         => "This defines the maximum number of hyperlinks allowed in a paste. A user ".
	                           "who submits more number of links than this will be required to choose a ".
	                           "paste language other than 'text'.",
	"antispam_updated"      => "Spam filter settings have been updated successfully",
	"auth_method"           => "Auth method",
	"banner_text"           => "Banner text",
	"banner_text_exp"       => "This text will be displayed above the login form.",
	"db"                    => "Database",
	"ldap"                  => "LDAP",
	"oauth"                 => "oAuth",
	"ldap_server"           => "LDAP server",
	"ldap_server_exp"       => "If using LDAP this is the hostname or IP address of the LDAP server.",
	"ldap_port"             => "LDAP port",
	"ldap_port_exp"         => "Optionally you can specify a port which should be used to connect to ".
	                           "the LDAP server instead of the default port 389.",
	"base_dn"               => "Base dn",
	"base_dn_exp"           => "This is the Distinguished Name, locating the user information, e.g. ".
	                           "o=My Company,c=US.",
	"uid"                   => "Identity uid",
	"uid_exp"               => "This is the key under which to search for a given login identity, ".
	                           "e.g. uid, sn, etc.",
	"user_filter"           => "User filter",
	"user_filter_exp"       => "Optionally you can further limit the searched objects with additional ".
	                           "filters. For example objectClass=posixGroup would result in the use of ".
	                           "(&(uid=\$username)(objectClass=posixGroup)).",
	"admin_group"           => "Admin group",
	"admin_group_exp"       => "Specify an administrator group in the format objectClass=posixGroup where ".
	                           "posixGroup is the admin group name in your LDAP user store.",
	"user_dn"               => "User dn",
	"user_dn_exp"           => "Leave blank to use anonymous binding. If filled in, sticky-notes uses ".
	                           "the specified distinguished name on login attempts to find the correct ".
	                           "user, e.g. uid=Username,ou=MyUnit,o=MyCompany,c=US. Required for Active ".
	                           "Directory Servers.",
	"ldap_password_exp"     => "Leave blank to use anonymous binding, otherwise fill in the password for ".
	                           "the above user. Required for Active Directory Servers.<br />".
	                           "<b>Warning</b>: This password will be stored as plain text in the database, ".
	                           "visible to everybody who can access the sticky-notes DB.",
	"user_reg"              => "Registration",
	"user_reg_exp"          => "Set this to disabled to stop new user account registrations.",
	"reg_captcha"           => "Captcha module",
	"reg_captcha_exp"       => "Enable or disable display of a visual verification field on the registration screen.",
	"info_url"              => "Info URL",
	"info_url_exp"          => "This link will be displayed next to the <b>Login</b> button on the user login form. ".
	                           "You may use this link to point to a manual page or an external registration page when ".
	                           "using a non-DB authentication method.",
	"info_url_text"         => "Info URL text",
	"info_url_text_exp"     => "Text for above link (eg. Identity Registration Page).",
	"client_id"             => "Client ID",
	"client_secret"         => "Client secret",
	"client_secret_exp"     => "You can generate client ID and secret key at the",
	"admin_emails"          => "Admin emails",
	"admin_emails_exp"      => "Users with these email addresses will be granted admin access. Please enter one email ".
	                           "address per line.",
	"enabled"               => "Enabled",
	"disabled"              => "Disabled",
	"auth_updated"          => "User authentication settings have been updated successfully",
	"system"                => "System",
	"data"                  => "Data",
	"paste_stats"           => "Paste statistics",
	"stat_no_data"          => "Not enough data has been collected to display paste statistics.",
	"versions"              => "Versions",
	"users"                 => "Users",
	"pastes"                => "Pastes",
	"general"               => "General",
	"content"               => "Content",
	"system_load"           => "System load",
	"db_driver"             => "DB driver",
	"php_version"           => "PHP version",
	"stickynotes_version"   => "Sticky Notes version",
	"date"                  => "Date",
	"web"                   => "Web",
	"api"                   => "API",
	"skin_applied"          => "The selected skin has been applied to your site",
	"skin_version"          => "The selected skin is incompatible with this version Sticky Notes",
	"skin_error"            => "The selected skin cannot be used as it is invalid",
	"version"               => "Version",
	"use_theme"             => "Use this theme",
	"active"                => "Active",
	"status"                => "Status",
	"role"                  => "Role",
	"google"                => "Google",
	"google_api_key"        => "API Key",
	"google_api_key_exp"    => "You can generate an Google API key at the",
	"google_cloud_console"  => "Google Cloud Console",
	"google_analytics"      => "Analytics",
	"google_analytics_exp"  => "Specify your Google Analytics tracking ID here. To disable tracking, simply leave ".
	                           "this field blank.",
	"services_updated"      => "Services settings updated successfully",
	"banners"               => "Banners",
	"banners_exp"           => "Site banners allow you to place custom HTML content within placeholders on all screens. ".
	                           "You can typically use banners to place advertisements on your website.",
	"allowed_tags"          => "Allowed HTML tags: %s",
	"banner_top"            => "Top banner",
	"banner_bottom"         => "Bottom banner",
	"size_limit"            => "Size limit",
	"size_limit_exp"        => "Maximum allowed size for the paste data. Set this to 0 to allow paste data to be as big ".
	                           "as the size supported by the database field itself.",
	"bytes"                 => "bytes",

);