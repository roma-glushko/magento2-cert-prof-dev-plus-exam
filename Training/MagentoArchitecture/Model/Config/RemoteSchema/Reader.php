<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Training\MagentoArchitecture\Model\Config\RemoteSchema;

use Training\MagentoArchitecture\Model\Config\RemoteSchema\Dom as ConfigDom;
use Magento\Framework\Config\FileResolverInterface;
use Magento\Framework\Config\Reader\Filesystem as FilesystemReader;
use Magento\Framework\Config\ValidationStateInterface;
use UnexpectedValueException;

class Reader extends FilesystemReader
{
    /**
     * List of id attributes for merge
     *
     * @var array
     */
    protected $_idAttributes = [
        '/config/template' => 'id'
    ];

    /**
     * @param FileResolverInterface $fileResolver
     * @param Converter $converter
     * @param RemoteSchemaLocator $schemaLocator
     * @param ValidationStateInterface $validationState
     * @param string $fileName
     * @param array $idAttributes
     * @param string $domDocumentClass
     * @param string $defaultScope
     */
    public function __construct(
        FileResolverInterface $fileResolver,
        Converter $converter,
        RemoteSchemaLocator $schemaLocator,
        ValidationStateInterface $validationState,
        $fileName = 'training_config.xml',
        $idAttributes = [],
        $domDocumentClass = ConfigDom::class,
        $defaultScope = 'global'
    ) {
        parent::__construct(
            $fileResolver,
            $converter,
            $schemaLocator,
            $validationState,
            $fileName,
            $idAttributes,
            $domDocumentClass,
            $defaultScope
        );
    }
}
