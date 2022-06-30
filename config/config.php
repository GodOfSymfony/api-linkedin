<?php

define('CLIENT_ID', '78p0k12vbcmz7t');
define('CLIENT_SECRET', 'MT4UUBpFf8wAm3x7');
define('SCOPES', 'r_organization_social,rw_organization_admin,w_member_social,w_organization_social,r_ads,r_basicprofile,r_ads_reporting,rw_ads');
define('BASE_URL', 'https://www.linkedin.com');
define('API_URL', 'https://api.linkedin.com');
define('REDIRECT_URL', 'http://api-linkedin/callback');
define('AUTH_URL', BASE_URL . '/oauth/v2/authorization?response_type=code&client_id=' . CLIENT_ID . '&redirect_uri=' . REDIRECT_URL . '&scope=' . SCOPES);
define('ROOT', dirname(__DIR__));
define('PROJECTION_COMMENTS', '/comments?projection=(elements(*(actor, message, id)))');
define('PROJECTION_AUTHOR_NAME', '?projection=(localizedName)');
define('PROJECTION_AUTHOR_FULLNAME', '?projection=(localizedFirstName, localizedLastName)');
define('REST_VERSION', '/v2/');
define('SOCIAL_ACTIONS_CALL', 'socialActions/');
define('ORGANIZATION_ACTIONS_CALL', 'organizations/');
define('PEOPLE_ACTIONS_CALL', 'people/');
define('FEED_UPDATE_ACTION', '/feed/update/');
