<?php

namespace FSAPI\Nodes;

/**
* SysAlarmDuration is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysalarmduration
*
* see class Node for details
*
*/
class SysAlarmDuration extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.alarm.duration';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = false;
    }
}