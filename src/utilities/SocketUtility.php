<?php
/**
 * Socket plugin for Craft CMS 3.x
 *
 * Craft 3 Plugin for Dev testing
 *
 * @link      https://ronan-oleary.com
 * @copyright Copyright (c) 2018 Ro O'Leary
 */

namespace ro\socket\utilities;

use ro\socket\Socket;
use ro\socket\assetbundles\socketutilityutility\SocketUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * Socket Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    Ro O'Leary
 * @package   Socket
 * @since     1.0.0
 */
class SocketUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('socket', 'SocketUtility');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'socket-socket-utility';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@ro/socket/assetbundles/socketutilityutility/dist/img/SocketUtility-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(SocketUtilityUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'socket/_components/utilities/SocketUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}
