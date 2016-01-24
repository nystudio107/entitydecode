<?php
/**
 * EntityDecode plugin for Craft CMS
 *
 * EntityDecode Twig Extension
 *
 * --snip--
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators, global variables, and
 * functions. You can even extend the parser itself with node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 * --snip--
 *
 * @author    Andrew Welch
 * @copyright Copyright (c) 2016 Andrew Welch
 * @link      http://nystudio107.com
 * @package   EntityDecode
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class EntityDecodeTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'EntityDecode';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return array(
            'unescape' => new \Twig_Filter_Method($this, 'unescape'),
        );
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'unescape' => new \Twig_Function_Method($this, 'unescape'),
        );
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @return string
     */
    public function unescape($text = null)
    {
        $result =  html_entity_decode($text);

        return $result;
    }
}