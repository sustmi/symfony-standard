<?php

namespace AppBundle\Model\String;

use AppBundle\Model\MyRepository;
use AppBundle\Model\RepositoryInterface;

class StringTransformer
{
    /**
     * @var RepositoryInterface
     */
    private $myRepository;

    public function __construct(MyRepository $myRepository)
    {
        $this->myRepository = $myRepository;
    }

    public function toLower($input)
    {
        return strtolower($input) . $this->myRepository->getSuffix();
    }
}