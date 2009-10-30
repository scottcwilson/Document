<?php
/**
 * File containing the ezcDocumentOdtStyleTextPropertyGenerator class.
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Text property generator.
 *
 * Creates and fills the text-properties element.
 *
 * @package Document
 * @access private
 * @version //autogen//
 */
class ezcDocumentOdtStyleTextPropertyGenerator extends ezcDocumentOdtStylePropertyGenerator
{
    /**
     * Creates a new text-properties generator.
     * 
     * @param ezcDocumentOdtStyleConverterManager $styleConverters 
     */
    public function __construct( ezcDocumentOdtStyleConverterManager $styleConverters )
    {
        parent::__construct(
            $styleConverters,
            array(
                'text-decoration',
                'font-size',
                'font-name',
                'font-weight',
                'color',
                'background-color',
            )
        );
    }

    /**
     * Creates the paragraph-properties element.
     *
     * Creates the paragraph-properties element in $parent and applies the fitting $styles.
     * 
     * @param DOMElement $parent 
     * @param array $styles 
     * @return DOMElement The created property
     */
    public function createProperty( DOMElement $parent, array $styles )
    {
        $prop = $parent->appendChild(
            $parent->ownerDocument->createElementNS(
                ezcDocumentOdt::NS_ODT_STYLE,
                'text-properties'
            )
        );
        $this->applyStyleAttributes(
            $prop,
            $styles
        );
    }
}

?>
