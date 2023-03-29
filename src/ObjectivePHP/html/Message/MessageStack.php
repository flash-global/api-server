<?php

namespace Fei\ApiServer\ObjectivePHP\Html\Message;

use Fei\ApiServer\ObjectivePHP\Primitives\Collection\Collection;

class MessageStack extends Collection
{
    public function __construct($messages = [])
    {
        parent::__construct($messages);
        $this->restrictTo(MessageInterface::class);
    }

    /**
     * @param null $type
     *
     * @return int
     * @throws \Fei\ApiServer\ObjectivePHP\Primitives\Exception
     */
    public function count($type = null)
    {
        if (is_null($type)) {
            $count = parent::count();
        } else {
            $count = 0;
            $this->each(
                function (MessageInterface $message) use (&$count, $type) {
                    if ($type == $message->getType()) {
                        $count++;
                    }
                }
            );
        }

        return $count;
    }
}