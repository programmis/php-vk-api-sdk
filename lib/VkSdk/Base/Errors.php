<?php
namespace VkSdk\Base;

/**
 * Class Errors
 *
 * @package VkSdk\Base
 */
class Errors
{

    /**
     * Access denied
     */
    const API_ERROR_ACCESS = 15;

    /**
     * Access denied
     */
    const API_ERROR_ACCESS_ALBUM = 200;

    /**
     * Access denied
     */
    const API_ERROR_ACCESS_AUDIO = 201;

    /**
     * Access to checkins denied
     */
    const API_ERROR_ACCESS_CHECKIN = 191;

    /**
     * Access to comment denied
     */
    const API_ERROR_ACCESS_COMMENT = 183;

    /**
     * Access to group denied
     */
    const API_ERROR_ACCESS_GROUP = 203;

    /**
     * Access to the groups list is denied due to the user's privacy settings
     */
    const API_ERROR_ACCESS_GROUPS = 260;

    /**
     * Access denied
     */
    const API_ERROR_ACCESS_MARKET = 205;

    /**
     * Access to the menu of the user denied
     */
    const API_ERROR_ACCESS_MENU = 148;

    /**
     * Access to note denied
     */
    const API_ERROR_ACCESS_NOTE = 181;

    /**
     * You can't comment this note
     */
    const API_ERROR_ACCESS_NOTE_COMMENT = 182;

    /**
     * Access to page denied
     */
    const API_ERROR_ACCESS_PAGE = 141;

    /**
     * Access denied
     */
    const API_ERROR_ACCESS_VIDEO = 204;

    /**
     * Unable to process action
     */
    const API_ERROR_ACTION_FAILED = 106;

    /**
     * Some part of the request has not been completed
     */
    const API_ERROR_ADS_PARTIAL_SUCCESS = 602;

    /**
     * Permission denied. You have no access to operations specified with given object(s)
     */
    const API_ERROR_ADS_PERMISSION = 600;

    /**
     * Some ads error occured
     */
    const API_ERROR_ADS_SPECIFIC = 603;

    /**
     * This album is full
     */
    const API_ERROR_ALBUM_FULL = 300;

    /**
     * Albums number limit is reached
     */
    const API_ERROR_ALBUMS_LIMIT = 302;

    /**
     * This achievement is already unlocked
     */
    const API_ERROR_APPS_ALREADY_UNLOCKED = 1251;

    /**
     * The audio file was removed by the copyright holder and cannot be reuploaded.
     */
    const API_ERROR_AUDIO_CLAIMED = 270;

    /**
     * User authorization failed
     */
    const API_ERROR_AUTH = 5;

    /**
     * Processing.. Try later
     */
    const API_ERROR_AUTH_DELAY = 1112;

    /**
     * Too many auth attempts, try again later
     */
    const API_ERROR_AUTH_FLOOD_ERROR = 1105;

    /**
     * HTTP authorization failed
     */
    const API_ERROR_AUTH_HTTPS = 16;

    /**
     * Incorrect code
     */
    const API_ERROR_AUTH_PARAM_CODE = 1110;

    /**
     * Invalid password
     */
    const API_ERROR_AUTH_PARAM_PASSWORD = 1111;

    /**
     * Validation required
     */
    const API_ERROR_AUTH_VALIDATION = 17;

    /**
     * Content blocked
     */
    const API_ERROR_BLOCKED = 19;

    /**
     * Captcha needed
     */
    const API_ERROR_CAPTCHA = 14;

    /**
     * Catalog is not available for this user
     */
    const API_ERROR_COMMUNITIES_CATALOG_DISABLED = 1310;

    /**
     * Catalog categories are not available for this user
     */
    const API_ERROR_COMMUNITIES_CATEGORIES_DISABLED = 1311;

    /**
     * Application is disabled. Enable your application or use test mode
     */
    const API_ERROR_DISABLED = 2;

    /**
     * In test mode application should be disabled or user should be authorized
     */
    const API_ERROR_ENABLED_IN_TEST = 11;

    /**
     * Invalid filename
     */
    const API_ERROR_FILENAME = 301;

    /**
     * Flood control
     */
    const API_ERROR_FLOOD = 9;

    /**
     * Cannot add this user to friends as you put him on blacklist
     */
    const API_ERROR_FRIENDS_ADD_ENEMY = 176;

    /**
     * Cannot add this user to friends as they have put you on their blacklist
     */
    const API_ERROR_FRIENDS_ADD_IN_ENEMY = 175;

    /**
     * Cannot add user himself as friend
     */
    const API_ERROR_FRIENDS_ADD_YOURSELF = 174;

    /**
     * Invalid list id
     */
    const API_ERROR_FRIENDS_LIST_ID = 171;

    /**
     * Reached the maximum number of lists
     */
    const API_ERROR_FRIENDS_LIST_LIMIT = 173;

    /**
     * Cannot edit creator role
     */
    const API_ERROR_GROUP_CHANGE_CREATOR = 700;

    /**
     * User should be in club
     */
    const API_ERROR_GROUP_NOT_IN_CLUB = 701;

    /**
     * Too many officers in club
     */
    const API_ERROR_GROUP_TOO_MANY_OFFICERS = 702;

    /**
     * Application has insufficient funds
     */
    const API_ERROR_INSUFFICIENT_FUNDS = 147;

    /**
     * Invalid screen name
     */
    const API_ERROR_INVALID_ADDRESS = 1260;

    /**
     * Out of limits
     */
    const API_ERROR_LIMITS = 103;

    /**
     * Album not found
     */
    const API_ERROR_MARKET_ALBUM_NOT_FOUND = 1402;

    /**
     * Comments for this market are closed
     */
    const API_ERROR_MARKET_COMMENTS_CLOSED = 1401;

    /**
     * Item already added to album
     */
    const API_ERROR_MARKET_ITEM_ALREADY_ADDED = 1404;

    /**
     * Item not found
     */
    const API_ERROR_MARKET_ITEM_NOT_FOUND = 1403;

    /**
     * Too late for restore
     */
    const API_ERROR_MARKET_RESTORE_TOO_LATE = 1400;

    /**
     * Too many albums
     */
    const API_ERROR_MARKET_TOO_MANY_ALBUMS = 1407;

    /**
     * Too many items
     */
    const API_ERROR_MARKET_TOO_MANY_ITEMS = 1405;

    /**
     * Too many items in album
     */
    const API_ERROR_MARKET_TOO_MANY_ITEMS_IN_ALBUM = 1406;

    /**
     * Can't send messages for users without dialogs
     */
    const API_ERROR_MESSAGES_DENY_SEND = 901;

    /**
     * Can't send messages to this user due to their privacy settings
     */
    const API_ERROR_MESSAGES_PRIVACY = 902;

    /**
     * Can't send messages for users from blacklist
     */
    const API_ERROR_MESSAGES_USER_BLOCKED = 900;

    /**
     * Unknown method passed
     */
    const API_ERROR_METHOD = 3;

    /**
     * Permission to perform this action is allowed only for standalone and OpenAPI applications
     */
    const API_ERROR_METHOD_ADS = 21;

    /**
     * This method was disabled
     */
    const API_ERROR_METHOD_DISABLED = 23;

    /**
     * Permission to perform this action is denied for non-standalone applications
     */
    const API_ERROR_METHOD_PERMISSION = 20;

    /**
     * The mobile number of the user is unknown
     */
    const API_ERROR_MOBILE_NOT_ACTIVATED = 146;

    /**
     * Confirmation required
     */
    const API_ERROR_NEED_CONFIRMATION = 24;

    /**
     * Not found
     */
    const API_ERROR_NOT_FOUND = 104;

    /**
     * One of the parameters specified was missing or invalid
     */
    const API_ERROR_PARAM = 100;

    /**
     * Invalid album id
     */
    const API_ERROR_PARAM_ALBUM_ID = 114;

    /**
     * Invalid application API ID
     */
    const API_ERROR_PARAM_API_ID = 101;

    /**
     * Invalid audio
     */
    const API_ERROR_PARAM_AUDIO = 123;

    /**
     * Access to document is denied
     */
    const API_ERROR_PARAM_DOC_ACCESS = 1153;

    /**
     * Access to document deleting is denied
     */
    const API_ERROR_PARAM_DOC_DELETE_ACCESS = 1151;

    /**
     * Invalid document id
     */
    const API_ERROR_PARAM_DOC_ID = 1150;

    /**
     * Invalid document title
     */
    const API_ERROR_PARAM_DOC_TITLE = 1152;

    /**
     * Invalid group id
     */
    const API_ERROR_PARAM_GROUP_ID = 125;

    /**
     * Invalid hash
     */
    const API_ERROR_PARAM_HASH = 121;

    /**
     * Note not found
     */
    const API_ERROR_PARAM_NOTE_ID = 180;

    /**
     * Page not found
     */
    const API_ERROR_PARAM_PAGE_ID = 140;

    /**
     * Invalid phone number
     */
    const API_ERROR_PARAM_PHONE = 1000;

    /**
     * Invalid photo
     */
    const API_ERROR_PARAM_PHOTO = 129;

    /**
     * Invalid photos
     */
    const API_ERROR_PARAM_PHOTOS = 122;

    /**
     * Invalid server
     */
    const API_ERROR_PARAM_SERVER = 118;

    /**
     * Invalid timestamp
     */
    const API_ERROR_PARAM_TIMESTAMP = 150;

    /**
     * Invalid title
     */
    const API_ERROR_PARAM_TITLE = 119;

    /**
     * Invalid user id
     */
    const API_ERROR_PARAM_USER_ID = 113;

    /**
     * Permission to perform this action is denied
     */
    const API_ERROR_PERMISSION = 7;

    /**
     * This phone number is used by another user
     */
    const API_ERROR_PHONE_ALREADY_USED = 1004;

    /**
     * Original photo was changed
     */
    const API_ERROR_PHOTO_CHANGED = 1160;

    /**
     * Access to poll denied
     */
    const API_ERROR_POLLS_ACCESS = 250;

    /**
     * Invalid answer id
     */
    const API_ERROR_POLLS_ANSWER_ID = 252;

    /**
     * Invalid poll id
     */
    const API_ERROR_POLLS_POLL_ID = 251;

    /**
     * Invalid request
     */
    const API_ERROR_REQUEST = 8;

    /**
     * You have sent same checkin in last 10 minutes
     */
    const API_ERROR_SAME_CHECKIN = 190;

    /**
     * Couldn't save file
     */
    const API_ERROR_SAVE_FILE = 105;

    /**
     * Internal server error
     */
    const API_ERROR_SERVER = 10;

    /**
     * Incorrect signature
     */
    const API_ERROR_SIGNATURE = 4;

    /**
     * User disabled track name broadcast
     */
    const API_ERROR_STATUS_NO_AUDIO = 221;

    /**
     * Too many requests per second
     */
    const API_ERROR_TOO_MANY = 6;

    /**
     * Too many feed lists
     */
    const API_ERROR_TOO_MANY_LISTS = 1170;

    /**
     * Unknown error occurred
     */
    const API_ERROR_UNKNOWN = 1;

    /**
     * Upload error
     */
    const API_ERROR_UPLOAD = 22;

    /**
     * User was deleted or banned
     */
    const API_ERROR_USER_DELETED = 18;

    /**
     * This video is already added
     */
    const API_ERROR_VIDEO_ALREADY_ADDED = 800;

    /**
     * Comments for this video are closed
     */
    const API_ERROR_VIDEO_COMMENTS_CLOSED = 801;

    /**
     * Not enough votes
     */
    const API_ERROR_VOTES = 503;

    /**
     * Permission denied. You must enable votes processing in application settings
     */
    const API_ERROR_VOTES_PERMISSION = 500;

    /**
     * Access to status replies denied
     */
    const API_ERROR_WALL_ACCESS_ADD_REPLY = 213;

    /**
     * Access to wall's comment denied
     */
    const API_ERROR_WALL_ACCESS_COMMENT = 211;

    /**
     * Access to wall's post denied
     */
    const API_ERROR_WALL_ACCESS_POST = 210;

    /**
     * Access to post comments denied
     */
    const API_ERROR_WALL_ACCESS_REPLIES = 212;

    /**
     * Access to adding post denied
     */
    const API_ERROR_WALL_ADD_POST = 214;

    /**
     * Advertisement post was recently added
     */
    const API_ERROR_WALL_ADS_PUBLISHED = 219;

    /**
     * Hyperlinks are forbidden
     */
    const API_ERROR_WALL_LINKS_FORBIDDEN = 222;

    /**
     * Too many recipients
     */
    const API_ERROR_WALL_TOO_MANY_RECIPIENTS = 220;

    /**
     * Permission denied. You have requested too many actions this day. Try later.
     */
    const API_ERROR_WEIGHTED_FLOOD = 601;
}
