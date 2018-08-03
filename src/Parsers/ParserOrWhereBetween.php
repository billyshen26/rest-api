<?php

namespace Zcwilt\Api\Parsers;

use Illuminate\Database\Eloquent\Builder;

class ParserOrWhereBetween extends ParserWhereBetweenAbstract
{
    public function prepareQuery(Builder $eloquentBuilder)
    {
        $eloquentBuilder = $eloquentBuilder->orWhereBetween($this->tokenized[0], [$this->tokenized[1], $this->tokenized[2]]);
        return $eloquentBuilder;
    }
}
