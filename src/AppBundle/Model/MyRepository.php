<?php

namespace AppBundle\Model;

class MyRepository implements RepositoryInterface
{
    public function getSuffix() {
        return 'XXX';
    }
}