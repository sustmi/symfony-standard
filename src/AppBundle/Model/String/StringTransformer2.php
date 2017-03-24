<?php

namespace AppBundle\Model\String;

use AppBundle\Model\MyRepository;
use AppBundle\Model\RepositoryInterface;

class StringTransformer2
{
    /**
     * @var RepositoryInterface
     */
    private $myRepository;

    public function __construct(RepositoryInterface $myRepository)
    {
        $this->myRepository = $myRepository;
    }

    public function toLower($input)
    {
        return strtolower($input) . $this->myRepository->getSuffix();
    }
}