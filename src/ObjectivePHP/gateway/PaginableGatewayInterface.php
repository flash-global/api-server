<?php

namespace Fei\ApiServer\ObjectivePHP\Gateway;

interface PaginableGatewayInterface
{
    public function paginate($page = 1, $pageSize = null);
}
