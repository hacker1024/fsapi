<?php

namespace FSAPI\Nodes;

/**
* NavStatus is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotenavstatus
*
* see class Node for details
*
*/
class NavStatus extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.nav.status';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
    }
}