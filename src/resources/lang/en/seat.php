<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015 to present Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

return [

    // General
    'home' => 'Home',
    'character' => 'Character|Characters',
    'corporation' => 'Corporation|Corporations',
    'user' => 'User|Users',
    'last_update' => 'Last Update',
    'last_updated' => 'Last Updated',
    'unknown' => 'Unknown',
    'note' => 'Note',
    'name' => 'Name|Names',
    'granted' => 'Granted',
    'denied' => 'Denied',
    'enabled' => 'Enabled',
    'disabled' => 'Disabled',
    'username' => 'Username',
    'email' => 'Email',
    'close' => 'Close',
    'date' => 'Date',
    'status' => 'Status',
    'id' => 'ID|IDs',
    'type' => 'Type|Types',
    'expiry' => 'Expiry',
    'never' => 'Never',
    'detail' => 'Detail|Details',
    'delete' => 'Delete',
    'kill' => 'Kill',
    'verify' => 'Verify',
    'reset' => 'Reset',
    'back' => 'Back',
    'summary' => 'Summary',
    'quantity' => 'Quantity',
    'volume' => 'Volume',
    'group' => 'Group|Groups',
    'owner' => 'Owner',
    'general' => 'General',
    'description' => 'Description',
    'labels' => 'Labels',
    'created' => 'Created',
    'issuer' => 'Issuer',
    'title' => 'Title|Titles',
    'price' => 'Price',
    'reward' => 'Reward',
    'collateral' => 'Collateral',
    'assignee' => 'Assignee',
    'acceptor' => 'Acceptor',
    'public' => 'Public',
    'location' => 'Location',
    'filter' => 'Filter|Filters',
    'clear' => 'Clear',
    'none' => 'None',
    'permission' => 'Permission|Permissions',
    'affiliation' => 'Affiliation|Affiliations',
    'role' => 'Role|Roles',
    'edit' => 'Edit',
    'remove' => 'Remove',
    'yes' => 'Yes',
    'no' => 'No',
    'update' => 'Update',
    'action' => 'Action',
    'key' => 'Key',
    'log' => 'Log|Logs',
    'view' => 'View',
    'item' => 'Item|Items',
    'usage' => 'Usage',
    'unit' => 'Unit|Units',
    'add' => 'Add',
    'all' => 'All',
    'inverse' => 'Inverse',
    'read' => 'Read',
    'level' => 'Level',
    'token' => 'Token',
    'token_status' => 'Token Status',
    'token_valid' => 'Valid Token|Valid Tokens',
    'token_status_warning' => 'Token has not been updated since more than a day, you should check your jobs.',
    'token_status_valid' => 'This character has a valid registered token.',
    'token_status_invalid' => 'You don\'t own any valid token for this character.',
    'set_default' => 'Set Default',
    'default' => 'Default',

    // Requirements
    'requirements' => 'Requirements',
    'requirements_message' => 'The following list shows missing PHP extensions. Please install' .
        ' them first before you can continue.',
    'php_version' => 'PHP Version',
    'php_version_message' => 'The installed version of PHP does not meet the minimum version' .
        ' requirement for SeAT. Please upgrade your PHP installation.',
    'installed_version' => 'Installed Version',
    'min_version' => 'Minimum Version',
    'admin_contact_warning' => 'An administrative contact for this install has not been set.' .
        ' No jobs will be queued because of this. Please configure it in the SeAT settings.',
    'refresh_token_warning' => 'Your account does not have a valid refresh token recorded. ' .
        'Please logout and back in to correct this as soon as possible.',
    'sso_config_warning' => 'SSO does not appear to have been configured yet. Only administrative ' .
        'logins are possible.',
    'sso_activation' => 'SSO Activation',
    'sso_confirmation' => 'It appears you already own an account. Please confirm your credentials in order to enable SSO.',

    // Auth
    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'login_welcome' => 'Welcome, please login using EVE Online SSO',
    'remember_me' => 'Remember me',
    'password' => 'Password',
    'password_again' => 'Password Again',
    'forgot' => 'I forgot my password',
    'register' => 'Register a new membership',
    'sign_in' => 'Sign In',
    'email_verify' => 'Email Verification',
    'email_verify_welcome' => 'Please enter a valid email address for your account.',

    // Registration
    'new_account' => 'New Account',
    'register_welcome' => 'Please choose a username and a strong password.',
    'register_eve_warn' => 'Do not use the same password that you use to log onto Eve Online',
    'existing_account' => 'I already have an account',
    'register_account' => 'Register Account',

    // Passwords
    'password_reset' => 'Password Reset',
    'reset_welcome' => 'Please enter the email address for the account who\'s password should be reset.',
    'remember' => 'I remember my credentials',
    'reset_topic' => 'Reset Password',
    'reset_token_welcome' => 'Please enter the email and new password.',

    // Header
    'toggle_navigation' => 'Toggle Navigation',
    'queued' => 'Queued',
    'working' => 'Working',
    'joined' => 'Joined',
    'profile' => 'Profile',
    'sign_out' => 'Sign Out',
    'stop_impersonation' => 'Stop Impersonation',
    'switch_character' => 'Change Main Character',
    'use_as_main_character' => 'Use as Main Character',
    'link_character' => 'Link Character',
    'characters_in_group' => 'Character in group|Characters in group',

    // Notifications
    'critical' => 'Critical',
    'error' => 'Error',
    'success' => 'Success',
    'warning' => 'Warning',
    'notice' => 'Notice',
    'info' => 'Info',
    'debug_disclaimer' => 'It looks like <b>debug mode</b> is currently <b>enabled</b>.<br/>This is an extremely dangerous configuration state that leaves your instance vulnerable to easily exploitable security issues via the debug features that are now enabled.</p><hr/><p>Unless you are developing for SeAT, or debugging a problem, <b>it is highly recommended that you disable this</b> as soon as possible.<br/>You can do so by setting the <kbd>APP_DEBUG</kbd> value to <kbd>false</kbd> in your <kbd>.env</kbd> file.<br/>After doing that, run <kbd>php artisan config:cache.</kbd>',
    'warning_disclaimer' => 'There is a critical warning that requires administrator attention!<br/>Please contact your SeAT administrators as soon as possible and ask them to login using an account with superuser privileges.',

    // Menu
    'api_key_management' => 'API Key Management',
    'add_api_key' => 'Add a EVE API Key',
    'list_keys' => 'List EVE API Keys',
    'all_char' => 'All Characters',
    'mail_timeline' => 'Mail Timeline',
    'all_corp' => 'All Corporations',
    'all_alliance' => 'All Alliances',
    'configuration' => 'Settings',
    'access' => 'Access Management',
    'other' => 'Other',
    'tools' => 'Tools',
    'security_logs' => 'Security Logs',
    'system_logs' => 'System Logs',
    'import' => 'Import API Keys',
    'settings' => 'SeAT Settings',
    'schedule' => 'Schedule',
    'no_main_char' => 'No Main Character',
    'no_email' => 'No email defined',
    'hello' => 'Hello',
    'online' => 'Online',
    'search' => 'Search',
    'main_menu' => 'Main Menu',
    'security' => 'Security',
    'sso' => 'Single Sign-on',
    'tracking' => 'Tracking',
    'about' => 'About',
    'market_browser' => 'Market Browser',

    'assets' => 'Assets',
    'location_flag' => 'Location Flag',
    'calendar' => 'Calendar',
    'channels' => 'Channels',
    'contacts' => 'Contacts',
    'contracts' => 'Contracts',
    'fittings' => 'Fittings',
    'fitting_items' => 'Fitting Items',
    'extraction' => 'Extraction|Extractions',
    'industry' => 'Industry',
    'intel' => 'Intel',
    'killmails' => 'Killmails',
    'mail' => 'Mail',
    'market' => 'Market',
    'notifications' => 'Notifications',
    'pi' => 'PI',
    'research' => 'Research',
    'sheet' => 'Sheet',
    'skills' => 'Skills',
    'standings' => 'Standing|Standings',
    'wallet' => 'Wallet',
    'wallet_journal' => 'Wallet Journal',
    'wallet_transactions' => 'Wallet Transactions',
    'wrong_probe_report_structure' => 'There is a problem with your probe report structure - :fields_number fields were expected per line. The issue has been recorded.',
    'insert_error_probe_report' => 'An issue as been encountered while posting your report. Please contact your administrator.',
    'probe_report_posted' => 'Your probe report has been successfully posted. :lines Moon composition lines has been updated.',

    // Dashboard
    'home_page' => 'The Home Page',
    'dashboard' => 'Dashboard',
    'online_players' => 'Online Players',
    'owned_api_keys' => 'Owned API Keys',
    'total_character_isk' => 'Total Character ISK',
    'total_character_skillpoints' => 'Total Character Skillpoints',
    'total_character_mined_isk' => 'Total Mined ISK',
    'total_character_ratted_isk' => 'Total Ratted ISK',
    'total_killmails' => 'Total Killmails',
    'main_char_skills' => ':character_name\'s Skills',
    'main_char_skills_per_level' => 'Skills Per Level',
    'main_char_skills_coverage' => 'Skills Coverage (in percent)',
    'concurrent_player_count' => 'Concurrent Player Count',
    'esi_response_time' => 'ESI Response Times',
    'current_month' => 'this month',

    // Api Keys
    'api_key_add' => 'Add a New API Key',
    'key_id' => 'Key ID',
    'v_code' => 'Verification Code',
    'check_key' => 'Check Key',
    'api_new_key' => 'Create a New API Key',
    'api_use_link' => 'Use the following link to create a new API Key',
    'api_full_link' => 'Full API Key for All Characters',
    'api_full_min_mask' => 'API Key with minimum Mask needed',
    'insufficient_access_mask' => 'This API Key does not meet the minimum Access Mask required',
    'api_key_info' => 'API Key Info',
    'api_key_type' => 'API Key Type',
    'api_access_mask' => 'API Access Mask',
    'api_add_type_key' => 'Add :type Api Key',
    'api_add_job' => 'Adding an Api Key will automatically queue a new update job for it',
    'api_min_mask' => 'Min. Mask',
    'api_access' => 'Access',
    'api_detail' => 'API Key Detail',
    'api_key_status' => 'API Key Status',
    'api_job_update' => 'Queue an Update Job',
    'owner_info' => 'Owner Information',
    'no_owner' => 'This API Key has no Owner',
    'member_since' => 'Member Since',
    'last_login' => 'Last Login',
    'account_status' => 'Account Status',
    'transfer_ownership' => 'Transfer Ownership',
    'seat_user' => 'SeAT User',
    'transfer' => 'Transfer',
    'mask_map_fail' => 'Unable to load the Access Mask map',
    'recent_jobs' => 'Recent Jobs',
    'scope' => 'Scope|Scopes',
    'api_all' => 'All API Keys',
    'reveal' => 'Reveal',
    'add_success' => 'Api Key Successfully Added. Update Job :jobid Dispatched',
    're_enable' => 'Re-enable Key',
    'disable' => 'Disable key',
    'reenable_all_disabled' => 'Re-enable all disabled keys',
    'disable_all_enabled' => 'Disable all enabled keys',
    'joblog' => 'Job Log',
    'job_log_config' => 'Job logging will only occur if it is enabled. Currently ' .
        'it is: :status',

    // People
    'people_groups' => 'People Groups',
    'unaffiliated_keys' => 'Unaffiliated Keys',
    'add_to_existing' => 'Add to Existing',
    'add_to_existing_group' => 'Add to Existing Group',
    'group_main' => 'Group Main',
    'new_group_with_main' => 'New Group with :name as Main',

    // Access
    'access_mangement' => 'Access Management',
    'quick_add_role' => 'Quick Add Role',
    'role_name' => 'Role Name',
    'add_new_role' => 'Add New Role',
    'available_roles' => 'Available Roles',
    'quick_add_user' => 'Quick Add User',
    'add_new_user' => 'Add New User',
    'edit_role' => 'Edit Role',
    'available_permissions' => 'Available Permissions',
    'grant_permissions' => 'Grant Permissions',
    'inverse_permission' => 'Inverse Permission',
    'inverse_affiliation' => 'Inverse Affiliation',
    'current_permissions' => 'Current Permissions',
    'has_superuser' => 'Has Superuser',
    'permission_inherit' => 'Inherits All Permissions',
    'available_corporations' => 'Available Corporations',
    'available_characters' => 'Available Characters',
    'add_affiliations' => 'Add Affiliations',
    'current_affiliations' => 'Current Affiliations',
    'available_users' => 'Available Users',
    'available_groups' => 'Available Group|Available Groups',
    'add_user' => 'Add User|Add Users',
    'add_group' => 'Add Group|Add Groups',
    'current_users' => 'Current Users',
    'current_groups' => 'Current Group|Current Groups',
    'select_item_add' => 'Select a Item to Add',
    'impersonate' => 'Impersonate',
    'edit_user' => 'Edit User',
    'activate_user' => 'Activate User',
    'reassign_user' => 'Reassign User',
    'reassign' => 'Reassign',
    'deactivate_user' => 'Deactivate User',
    'account_status_change' => 'The account status has been changed',
    'user_agent' => 'User Agent String',
    'login_history' => 'Login History',
    'role_summary' => 'Role Summary',
    'user_updated' => 'The user has been updated',
    'user_deleted' => 'The user has been deleted',
    'self_delete_warning' => 'You can not delete yourself!',
    'impersonating' => 'Impersonating :user',
    'revert_impersonation' => 'Impersonation Stopped',
    'user_created' => 'User Created',
    'unauthorized_request' => 'Unauthorized Request',
    'unauthorized_request_logged' => 'This attempt has been logged.',

    'role_added' => 'Role has been added',
    'role_updated' => 'Role has been updated - :added new permissions, :removed removed permissions, :filtered filtered permissions',
    'role_removed' => 'Role has been removed',
    'permissions_granted' => 'Permissions have been granted',
    'permission_revoked' => 'Permission has been revoked',
    'user_added' => 'Users were added to this role',
    'user_removed' => 'User has been removed from this role',
    'affiliations_added' => 'Affiliations were added to this role',
    'affiliation_removed' => 'Affiliation has been removed from this role',

    // Tokens
    'valid_token' => 'Valid Token|Valid Tokens',
    'invalid_token' => 'Invalid Token|Invalid Tokens',

    // Import
    'api_import_title' => 'Import Eve Online API Keys',
    'csv_data_source' => 'CSV Data Source File',
    'help' => 'Help',
    'importing_csv_data' => 'Import CSV Data',
    'csv_format_explained' => 'The file format for the CSV is keyID,vCode and sampled below',
    'important_notes' => 'Important Notes',
    'curr_user_becomes_owner' => 'The current user (:user) will become the owner of the API keys.',
    'only_format_is_checked' => 'Only API key format is checked here. No checking is done to ensure that ' .
        'minimum api masks are configured.',
    'update_with_next_job' => 'Key data will only populate once the next updater job comes by, or is manually started.',

    // Schedule
    'new_schedule' => 'New Schedule',
    'available_commands' => 'Available Commands',
    'cron_expression' => 'Cron Expression',
    'current_schedule' => 'Current Schedule',
    'command' => 'Command',
    'cron' => 'Cron',
    'allow_overlap' => 'Allow Overlap',
    'allow_maintenance' => 'Allow in Maintenance Mode',
    'scheduled_commands' => 'Scheduled Commands',
    'choose_prepop' => 'Choose a pre-populated cron expression, or write your own.',
    'add_scheduled' => 'Add Scheduled Command',
    'esi_character_scheduling_rules' => 'ESI Character Scheduling Rules',
    'new_esi_character_scheduling_rules' => 'Add ESI Character Scheduling Rules',
    'update_interval' => 'Update Interval',
    'character_scheduling_rules_default'=>'When no rules apply, an update interval of one hour is used.',
    'character_scheduling_rule_deleted' => 'Successfully deleted character scheduling rule!',

    // Security
    'category' => 'Category',
    'message' => 'Message',
    'source' => 'Source',

    // Ledger
    'ledger' => 'Wallet Ledger',
    'bounty_prizes' => 'Bounty Prizes',
    'offices_rentals' => 'Offices Rentals',
    'industry_facility' => 'Industry Facility',
    'reprocessing' => 'Reprocessing',
    'jump_bridges' => 'Jump Bridges',
    'wallet_division_name' => 'Wallet Division Name',
    'wallet_summary' => 'Wallet Summary|Wallet Summaries',

    // Users
    'user_management' => 'User Management',

    // Settings
    'admin_email' => 'Administrator Email',
    'admin_email_help' => 'Please enter the email address of the administrator of this SeAT installation.',
    'min_access_mask' => 'Minimum Required Access Mask',
    'min_character_access_mask' => 'Minimum Required Character Access Mask',
    'min_corporation_access_mask' => 'Minimum Required Corporation Access Mask',
    'force_min_mask' => 'Force Min. Access Mask',
    'registration' => 'Registration',
    'maintenance' => 'Maintenance',
    'cleanup_data' => 'Cleanup Stale Data',
    'cleanup_data_help' => 'When configured to cleanup stale data, the SeAT maintenance job ' .
        'will delete stale data such as users and corporations without valid users from this ' .
        'instance.',
    'single_signon' => 'Eve Online Single Signon',
    'admin_warn_sso' => 'Double check you EVE_CLIENT_ID, EVE_CLIENT_SECRET and EVE_CALLBACK_URL' .
        ' values in the .env file as they may be empty or invalid. SSO can fail because of this!',
    'allow_sso' => 'Allow Single Signon',
    'allow_registration' => 'Allow Registration',
    'allow_user_character_unlink' => 'Allow user to unlink their characters',
    'unlink' => 'Unlink',
    'module_versions' => 'SeAT Module Versions',
    'tp_versions' => 'Third Party Versions',
    'installed' => 'Installed',
    'current' => 'Current',
    'url' => 'URL',
    'google_analytics' => 'Google Analytics',
    'allow_tracking' => 'Allow Tracking',
    'tracking_id' => 'Unique Tracking ID',
    'tracking_help' => 'Before disabling the usage tracking, please refer to the below' .
        ' document first.',
    'customlink' => 'Custom Links',
    'customlink_description' => 'You can add custom links to the SeAT sidebar menu here. You can optionally specify an ' .
        'icon to use from the :fa-link free icons (eg. :icon).',
    'new_tab_question_mark' => 'New tab ?',

    // SSO Settings
    'sso_scopes' => 'SSO Scopes',
    'sso_scopes_profile_name' => 'Profile Name',
    'sso_scopes_profile_name_help' => 'You may use alpha-numeric characters along with hypens and underscores.',
    'available_scopes' => 'Available SSO Scopes',
    'enable_all' => 'Enable All',
    'remove_all' => 'Remove All',
    'update_sso_scopes' => 'Update SSO Scopes',
    'current_configuration_status' => 'Current SSO Configuration',
    'client_id_status' => 'Client ID Status',
    'client_id_ok' => 'Client ID OK',
    'client_id_not_ok' => 'Client ID Not OK. Check .env file',
    'client_secret_status' => 'Client Secret Status',
    'client_secret_ok' => 'Client Secret OK',
    'client_secret_not_ok' => 'Client Secret not OK. Check .env file',
    'callback_url_status' => 'Callback URL Status',
    'callback_url_ok' => 'Callback URL OK as :url',
    'callback_maybe_wrong' => 'Callback URL set but might be incorrect. Currently set as :current ' .
        'and should maybe be :suggested',
    'client_callback_not_ok' => 'Callback URL not set. Check .env and set as :url',
    'custom_signin_page' => 'Customise Sign In page',
    'custom_signin_page_desc' => 'You can customise the message on the sign in page and insert links to your custom SSO scope ' .
        'profiles as well. Leave blank to use the default. If you enter something below, you must ensure at least one button is shown.',

    // Updaters
    'update_dispatched' => 'Update job has successfully been dispatched. Please check back again ' .
        'in a few moments.',
    'update_failed' => 'Update job dispatching failed. Please contact your SeAT administrator.',
    'update_skill_queue' => 'Update Skill Queue',
    'update_assets' => 'Update Assets',
    'update_blueprints' => 'Update Blueprints',
    'update_calendar' => 'Update Calendar',
    'update_contacts' => 'Update Contacts',
    'update_contracts' => 'Update Contracts',
    'update_corp_history' => 'Update Employment History',
    'update_customs_offices' => 'Update Customs Offices',
    'update_divisions' => 'Update Divisions',
    'update_fittings' => 'Update Fittings',
    'update_industry' => 'Update Industry Jobs',
    'update_journals' => 'Update Journals',
    'update_killmails' => 'Update Killmails',
    'update_mail' => 'Update Mail',
    'update_market' => 'Update Market',
    'update_members_tracking' => 'Update Members Tracking',
    'update_mining' => 'Update Mining Ledger',
    'update_notifications' => 'Update Notifications',
    'update_pi' => 'Update Planetary Interaction',
    'update_research' => 'Update Agents Research',
    'update_skills' => 'Update Skills',
    'update_standings' => 'Update Standings',
    'update_starbase' => 'Update Starbase',
    'update_structures' => 'Update Structures',
    'update_transactions' => 'Update Transactions',
    'update_wallet' => 'Update Wallet',
    'update_loyalty_points' => 'Update Loyalty Points',

    // Character
    'joined_curr_corp' => 'Joined Current Corporation',
    'skillpoint' => 'Skillpoint|Skillpoints',
    'account_balance' => 'Account Balance',
    'current_ship' => 'Current Ship',
    'last_location' => 'Last Location',
    'security_status' => 'Security Status',
    'items_taking' => 'items taking',
    'calendar_events' => 'Calendar Events',
    'loyalty_points' => 'Loyalty Points',
    'loyalty_point_prices' => 'Fuzzwork LP Prices',
    'positive_standings' => 'Positive Standings',
    'neutral_standings' => 'Neutral Standings',
    'negative_standings' => 'Negative Standings',
    'excellent_standings' => 'Excellent Standings',
    'good_standings' => 'Good Standings',
    'terrible_standings' => 'Terrible Standings',
    'bad_standings' => 'Bad Standings',
    'start' => 'Start',
    'end' => 'End',
    'installer' => 'Installer',
    'system' => 'System',
    'constellation' => 'Constellation',
    'region' => 'Region',
    'activity' => 'Activity',
    'run' => 'Run|Runs',
    'blueprint' => 'Blueprint',
    'product' => 'Product',
    'victim' => 'Victim',
    'ship_type' => 'Ship Type',
    'transaction_type' => 'Transaction Type',
    'owner_1' => 'From',
    'owner_2' => 'To',
    'amount' => 'Amount',
    'balance' => 'Balance',
    'corporation_name' => 'Corporation Name',
    'character_name' => 'Character Name',
    'from' => 'From',
    'subject' => 'Subject',
    'to' => 'To',
    'to_corp' => 'To Corporation',
    'missing_body' => 'Message Body not yet downloaded',
    'to_alliance' => 'To Alliance',
    'to_char' => 'To Characters',
    'total' => 'Total',
    'updated' => 'Updated At',
    'planet' => 'Planet',
    'upgrade_level' => 'Upgrade Level',
    'no_pins' => '# Pins',
    'agent' => 'Agent',
    'skill' => 'Skill|Skills',
    'points_p_day' => 'Points per Day',
    'remainder' => 'Remainder',
    'skills_summary' => 'Skills Summary',
    'curr_training' => 'Currently Training',
    'skill_training_end' => 'Skill Training End',
    'skill_queue' => 'Skill Queue',
    'no_skill_training' => 'No Skill in Training',
    'empty_skill_queue' => 'The Skill Queue is Empty',
    'account_info' => 'Account Information',
    'paid_until' => 'Paid Until',
    'logon_count' => 'Logon Count',
    'online_time' => 'Online Time',
    'jump_fatigue' => 'Jump Fatigue',
    'jump_clones' => 'Jump Clone|Jump Clones',
    'jump_act_timer' => 'Jump Activation Timer',
    'no_jump_clones' => 'No Jump Clones',
    'implants' => 'Implant|Implants',
    'no_implants' => 'No Implants',
    'employment_history' => 'Employment History',
    'no_employment_information' => 'No employment information',
    'corporation_titles' => 'Corporation Title|Corporation Titles',
    'no_corporation_titles' => 'No corporation titles',
    'attribute' => 'Attribute|Attributes',
    'value' => 'Value|Values',
    'bonus_remaps' => 'Bonus Remaps',
    'last_remap_date' => 'Last Remap Date',
    'accrued_remap_cooldown_date' => 'Accured Remap Cooldown Date',
    'no_remap' => 'No Remap Found',
    'item_type' => 'Item Type',
    'client_name' => 'Client Name',
    'client' => 'Client',
    'qty' => '#',
    'unknown_character' => 'Unknown Character. Is the API Key on record and updated?',
    'deleted_refresh_token' => 'A refresh token for this character was deleted about :time. As a result, information displayed may be out of date.',
    'channel_members' => 'Channel Members',
    'motd' => 'MoTD',
    'coordinates' => 'Coordinates',
    'folder' => 'Folder',
    'skills_graph' => 'Skills Graph',
    'contract_items' => 'Contract Items',
    'progress' => 'Progress',

    // Character Intel
    'loading_journal' => 'Loading Journal Entries ...',
    'loading_transactions' => 'Loading Transaction Entries ...',
    'loading_mail' => 'Loading Mail Entries...',

    // Corporation
    'alliance' => 'Alliance|Alliances',
    'corporation_count' => 'Corporation Count',
    'executor' => 'Executor',
    'ticker' => 'Ticker',
    'ceo' => 'CEO',
    'home_station' => 'Home Station',
    'tax_rate' => 'Tax Rate',
    'member_count' => 'Member Count',
    'roles_change_log' => 'Roles Change Log',
    'affected' => 'Affected',
    'member_limit' => 'Member Limit',
    'shares' => 'Shares',
    'member_capacity' => 'Member Capacity',
    'divisional_information' => 'Divisional Information',
    'corporation_divisions' => 'Corporation Divisions',
    'wallet_divisions' => 'Wallet Divisions',
    'unknown_corporation' => 'Unknown Corporation. Is the API Key on record and updated?',
    'created_by' => 'Created By',
    'created_by_corporation' => 'Created By Corporation',
    'starbase' => 'Starbase|Starbases',
    'structure' => 'Structure|Structures',
    'reinforce_week_hour' => 'Reinf. Week/Hour',
    'low_power' => 'Low Power',
    'state' => 'State',
    'fuel_level' => 'Fuel Level',
    'offline' => 'Offline Est.',
    'cargo_usage' => 'Cargo Usage',
    'onlined_at' => 'Onlined At',
    'services' => 'Service|Services',
    'moon' => 'Moon',
    'use_standings_from' => 'Use Standings From',
    'attack_on_agression' => 'Attack On Aggression',
    'attack_on_war' => 'Attack On War',
    'corp_member_access' => 'Corp Member Access',
    'alliance_member_access' => 'Alliance Member Access',
    'fuel_levels' => 'Fuel Levels',
    'fuel_blocks' => 'Fuel Blocks',
    'fuel_usage' => 'Fuel Usage',
    'low_fuel' => 'Low Fuel',
    'stront_usage' => 'Strontium Usage',
    'blocks_p_h' => 'Blocks p/h',
    'units_p_h' => 'Units p/h',
    'sov_bonus' => 'Sovereignty Bonus',
    'reinforce_estimate' => 'Reinforcement Estimate',
    'module' => 'Module|Modules',
    'content' => 'Content',
    'no_known_assets' => 'No Known Assets',
    'volume_usage' => 'Volume Usage',
    'loading_modules' => 'Loading Module Information...',
    'customs-offices' => 'Customs Offices',
    'reinforcement' => 'Reinforcement',
    'standing_level' => 'Standing Level',
    'tax_alliance_corp' => 'Tax: Alliance/Corp',
    'tax_standings' => 'Tax: Standings',
    'no_storage' => 'There is no storage',
    'member' => 'Member|Members',
    'faction' => 'Faction',

    'start_at' => 'Start at',
    'drill_start' => 'Drill Start',
    'chunk_arrival' => 'Chunk Arrival',
    'chunk_age' => 'Extraction Length',
    'self_destruct' => 'Self-Destruct',
    'auto_fracture' => 'Auto Fracture',
    'rarity' => 'Rarity',
    'rate' => 'Rate',

    // Mining Ledger
    'mining' => 'Mining',
    'mining_ledger' => 'Ledger|Ledgers',
    'available_ledger' => 'Available Ledger|Available Ledgers',
    'ore' => 'Ore',

    // Profile
    'user_profile' => 'User Profile',
    'user_preferences' => 'User Preferences',
    'user_account' => 'User Account',
    'account_settings' => 'Account Settings',
    'upgrade_sso' => 'Upgrade to EVE Online SSO Account',
    'change_email' => 'Change Email',
    'superuser' => 'Superuser',
    'user_interface' => 'User Interface',
    'main_character' => 'Main Character',
    'related_characters' => 'Related Characters',
    'seat_skin' => 'SeAT Skin',
    'language' => 'Language',
    'sidebar_size' => 'Sidebar Size',
    'mail_as_threads' => 'View Mail as Threads',
    'number_format' => 'Number Format',
    'current_format' => 'Current Format',
    'thousands_seperator' => 'Thousands Separator',
    'decimal_seperator' => 'Decimal Separator',
    'reprocessing_yield' => 'Reprocessing Yield',
    'email_notifications' => 'Email Notifications',
    'setup_token_now' => 'Setup Token Now',
    'owned_keys' => 'Owned Keys',
    'account_help' => 'For any account related enquiries, including permissions amendments, ' .
        'please contact the SeAT administrator.',
    'current_email' => 'Current Email',
    'new_email' => 'New Email',
    'confirm_new_email' => 'Confirm New Email',
    'email_in_use' => 'The e-mail address :mail is already in use.',
    'scan_qr' => 'Scan QR Code',
    'scan_qr_help1' => 'Please scan the below QR code with your authenticator application.',
    'scan_qr_help2' => 'Each time this page loads, a new token and qr code is generated.',
    'supported_apps' => 'Supported Google Authenticator Apps',
    'preferred_apps' => 'Preferred Apps',
    'other_apps' => 'Other Apps',
    'confirm_code' => 'Confirm an Authentication Code',
    'confirm_help' => 'Next, confirm your setup by entering a confirmation code generated ' .
        'by your authentication application.',
    'code' => 'Code',
    'confirm_setup' => 'Confirm Setup',
    'linked_characters' => 'Linked Characters',
    'link_another_character' => 'Link another character',
    'view_third_party_access' => 'View Apps on Eveonline.com',
    'third_party_access' => 'Check the access third party applications (such as this one) have to ' .
        'your EVE Online account regularly.',
    'user_sharelink' => 'User Sharing',
    'user_sharelink_description' => 'You can generate a sharing link that can be shared with other SeAT users to allow them to view your linked characters information.',
    'user_sharelink_generate' => 'Generate Link',

    // Queue
    'queue_manage' => 'Queue Management',
    'total_jobs' => 'Total Jobs',
    'queued_jobs' => 'Queued Jobs',
    'working_jobs' => 'Working Jobs',
    'error_jobs' => 'Errored Jobs',
    'complete' => ' complete.',
    'history' => 'History',
    'submit_jobs' => 'Submit Jobs',
    'job_submit_desc' => 'These buttons allow you to manually queue jobs into the scheduler. It ' .
        'runs exactly the same commands as you would on the commandline or via the scheduler.',
    'no_working' => 'There are currently no working jobs',
    'no_queue' => 'There are currently no queued jobs',
    'job_error_detail' => 'Job Error Details',
    'error_details_desc' => 'This is a full stack trace for this job error. If this is not something ' .
        'that you understand, or a developer has asked for this, please copy the entire section below ' .
        'and paste it on a site such as pastebin and send the link along.',
    'full_job_error' => 'Full Job Error Detail',
    'job_id' => 'Job ID',
    'api' => 'Api',
    'actions' => 'Actions',
    'owner_id' => 'Owner ID',
    'clear_all_errors' => 'Clear All Errors',
    'output' => 'Output',
    'last_output' => 'Last Output',
    'view_full' => 'View Full',
    'no_errors' => 'There are no known errors',
    'clear_all_history' => 'Clear All History',
    'job_history' => 'Job History',
    'no_history' => 'There are no historical jobs',
    'eve_api_status' => 'EVE API Status',
    'eve_api_error_threshold' => 'API Errors',
    'eve_api_connection_threshold' => 'Connection Errors',
    'supervisor_offline' => 'Offline',
    'supervisor_online' => 'Online',

    // Tools
    'standings_builder' => 'Standings Builder',
    'moons_reporter' => 'Moons Reporter',

    // Error pages
    'duplicate_account' => 'Duplicate Account',
    'duplicate_account_msg' => 'We are unable to proceed your change. The character :name is already used in another account. Please contact your administrator to regulate the situation.',

    // Footer
    'web_version' => 'Web Version',
    'docker_version' => 'Docker Version',
    'sde_version' => 'SDE Version',
    'render_in' => 'Rendered In',
    'copyright' => 'Copyright',
];
