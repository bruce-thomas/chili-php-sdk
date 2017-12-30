<?php

namespace Galilee\PPM\SDK\Chili\Service;

use Galilee\PPM\SDK\Chili\ChiliPublisher;
use Galilee\PPM\SDK\Chili\Entity;

/**
 * Class Document - manages document entities
 */
class Documents extends AbstractService
{

    /**
     * @param $xmlString
     * @return Entity\Document
     */
    protected function getEntity($xmlString)
    {
        return new Entity\Document($this->client, $xmlString);
    }

    protected function getResourceName()
    {
        return ChiliPublisher::RESOURCE_NAME_DOCUMENTS;
    }
}
