<?php
class Organization extends Eloquent
{
    public function users()
    {
        return $this->has_many_and_belongs_to('User');
    }

    /**
     * Get the current organization from the URI. Set session vars if needed.
     *
     * @return object
     */

    public static function get_current()
    {
        $current_organization_slug = URI::segment(1);

        // verify that a valid slug is in the URI
        if ( is_null( Organization::where_slug($current_organization_slug)->first() ))
        {
            return Auth::user()->organizations()->first();
        }

        if(is_null($current_organization_slug))
        {
            $current_organization = Auth::user()->organizations()->first();
            return $current_organization;
        }
        else
        {
            $current_organization = Organization::where_slug($current_organization_slug)->first();
            return $current_organization;
        }
    }

    /*
     * Set the current organization session vars.
     *
     * @param   $organization_id
     * @return  void
     */

    public static function set_current($organization_slug)
    {
        Session::put('current_organization', $organization_slug);
    }

    public function workspaces()
    {
        return $this->has_many_and_belongs_to('Workspace');
    }
}