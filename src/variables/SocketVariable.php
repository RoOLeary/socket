<?php
/**
 * Socket plugin for Craft CMS 3.x
 *
 * Craft 3 Plugin for Dev testing
 *
 * @link      https://ronan-oleary.com
 * @copyright Copyright (c) 2018 Ro O'Leary
 */

namespace ro\socket\variables;

use ro\socket\Socket;

use Craft;

/**
 * Socket Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.socket }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Ro O'Leary
 * @package   Socket
 * @since     1.0.0
 */
class SocketVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.socket.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.socket.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
