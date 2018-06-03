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

namespace nystudio107\entitydecode\twigextensions;

use nystudio107\entitydecode\EntityDecode;

use Craft;

/**
 * EntityDecode twig extension
 *
 * @author    nystudio107
 * @package   EntityDecode
 * @since     1.0.0
 */
class EntityDecodeTwigExtension extends \Twig_Extension
{

    /**
     * Return our Twig Extension name
     *
     * @return string
     */
    public function getName()
    {
        return 'EntityDecode';
    }

    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('unescape', [$this, 'unescape']),
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('unescape', [$this, 'unescape']),
        ];
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
