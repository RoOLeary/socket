<?php
/**
 * Socket plugin for Craft CMS 3.x
 *
 * Craft 3 Plugin for Dev testing
 *
 * @link      https://ronan-oleary.com
 * @copyright Copyright (c) 2018 Ro O'Leary
 */

namespace ro\socket\services;

use ro\socket\Socket;

use Craft;
use craft\base\Component;

/**
 * SocketService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Ro O'Leary
 * @package   Socket
 * @since     1.0.0
 */
class SocketService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Socket::$plugin->socketService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
