<?php

namespace Interview\Challenge3\App;

use Interview\Challenge3\Vendor\StateRequestFactoryInterface;
use Interview\Challenge3\Vendor\StateRequestInterface;

class StateRequestFactory implements StateRequestFactoryInterface
{
    private AvailableStateRepositoryInterface $availableStateRepository;

    public function __construct(AvailableStateRepositoryInterface $availableStateRepository)
    {
        $this->availableStateRepository = $availableStateRepository;
    }

    public function createFromGET(): StateRequestInterface
    {
        $state = (string) ($_GET[StateRequest::STATE_KEY] ?? '');

        if (!in_array($state, $this->availableStateRepository->all())) {
            throw new \DomainException('State not allowed');
        }

        return new StateRequest(
            (string) ($_GET[StateRequest::ADDRESS_ID_KEY] ?? ''),
            $state
        );
    }
}