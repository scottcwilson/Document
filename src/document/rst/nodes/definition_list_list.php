<?php
/**
 * File containing the ezcDocumentRstDefinitionListListNode struct
 *
 * @package TextLine
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * The paragraph AST node
 * 
 * @package TextLine
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
class ezcDocumentRstDefinitionListListNode extends ezcDocumentRstNode
{
    /**
     * Construct RST document node
     * 
     * @param ezcDocumentRstToken $token 
     * @return void
     */
    public function __construct( ezcDocumentRstToken $token )
    {
        // Perhaps check, that only node of type section and metadata are
        // added.
        parent::__construct( $token, self::DEFINITION_LIST_LIST );
    }

    /**
     * Set state after var_export
     * 
     * @param array $properties 
     * @return void
     * @ignore
     */
    public static function __set_state( $properties )
    {
        $node = new ezcDocumentRstDefinitionListListNode(
            $properties['token']
        );

        $node->nodes       = $properties['nodes'];
        return $node;
    }
}

?>
