<?php
/**
 * File containing the ezcDocumentListItemGenerator class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * List item generator
 *
 * Simple bullet list item generator, which returns the character passed to the 
 * constructor for each list item.
 *
 * @package Document
 * @access private
 * @version //autogen//
 */
class ezcDocumentBulletListItemGenerator extends ezcDocumentListItemGenerator
{
    /**
     * Character used for the bullet lsit items
     * 
     * @var string
     */
    protected $character;

    /**
     * Construct from bullet to use
     * 
     * @param string $char 
     * @return void
     */
    public function __construct( $char = '-' )
    {
        $this->character = $char;
    }

    /**
     * Get list item
     *
     * Get the n-th list item. The index of the list item is specified by the
     * number parameter.
     * 
     * @param int $number 
     * @return string
     */
    public function getListItem( $number )
    {
        return $this->character;
    }
}

?>
