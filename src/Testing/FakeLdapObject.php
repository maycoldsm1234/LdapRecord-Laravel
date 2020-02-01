<?php

namespace LdapRecord\Laravel\Testing;

use LdapRecord\Connection;
use LdapRecord\Models\Model;
use LdapRecord\Models\Events\Event;

class FakeLdapObject extends Model
{
    public function newQueryBuilder(Connection $connection)
    {
        return new EloquentLdapBuilder($connection);
    }

    public function synchronize()
    {
        return true;
    }

    protected function fireModelEvent(Event $event)
    {
        // Do nothing...
    }
}