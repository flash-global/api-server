<?php

namespace Fei\ApiServer\ObjectivePHP\Events;

use ObjectivePHP\Primitives\Collection\Collection;

interface EventInterface
{
    public function setName($name);

    public function getName();

    public function setOrigin($origin);

    public function getOrigin();

    public function setPrevious(EventInterface $previous);

    public function getPrevious();

    /**
     * @return Collection
     */
    public function getResults();

    /**
     * @return Collection
     */
    public function getContext();

    public function setContext($context);

    public function getStatus();

    /**
     * @return Collection
     */
    public function getExceptions();

    public function halt();

    public function isHalted();

    public function isFaulty();
}
