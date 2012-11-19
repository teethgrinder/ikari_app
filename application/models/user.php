<?php
class User extends Eloquent
{
    public function organizations()
    {
        return $this->has_many_and_belongs_to('Organization');
    }
}