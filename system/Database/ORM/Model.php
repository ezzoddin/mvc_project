<?php

namespace System\Database\ORM;

use System\Database\Trats\HasCRUD;
use System\Database\Trats\HasAttributes;
use System\Database\Trats\HasMethodCaller;
use System\Database\Trats\HasQueryBuilder;
use System\Database\Trats\HasRelation;
use System\Database\Trats\HasSoftDelete;

abstract class Model
{
    use HasCRUD, HasAttributes, HasMethodCaller, HasQueryBuilder, HasRelation, HasSoftDelete;


}



