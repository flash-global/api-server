<?php

namespace Fei\ApiServer\ObjectivePHP\Application\Workflow\Filter;

use Fei\ApiServer\ObjectivePHP\Application\ApplicationInterface;
use Fei\ApiServer\ObjectivePHP\Application\Exception;
use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;

class ContentTypeFilter extends AbstractFilter
{
    public function run(ApplicationInterface $app)
    {
        $response = $app->getResponse();

        if (!$response) {
            throw new Exception(sprintf('Cannot filter response ContentType against "%s" because no response has been set', $this->getFilter()->join(', ')));
        }

        $contentTypes = $response->getHeader('Content-Type');

        $result = false;

        $this->getFilter()->each(function ($filter) use ($contentTypes, &$result) {
            foreach ($contentTypes as $contentType) {
                if (strpos($contentType, $filter) === 0) {
                    $result = true;
                    break;
                }
            }
        });

        return $result;
    }

    public function getDescription(): string
    {
        return sprintf('Filter based on Response ContentType header (validates "%s" content type)', $this->getFilter()->join(', '));
    }

    public function getFilter()
    {
        return Collection::cast($this->filter);
    }
}