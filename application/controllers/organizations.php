<?php

class Organizations_Controller extends Base_Controller {

    public $restful = true;    

    public function get_index()
    {
        // Index would normally show all organizations, however, we want / to show $default_org/employee-network
        // so we redirect to show that specific org
        return Redirect::to_action('organizations@show', array(Organization::get_current()->slug) );
    }

    public function get_show()
    {
        $this->layout->content = View::make('organization.show');
    }

    public function get_new()
    {
        $this->layout->content = View::make('organization.new');
    }

    public function post_create()
    {

    }

    public function get_store()
    {

    }

    public function get_edit($org_slug)
    {
        $this->layout->content = View::make('organization.edit');
    }


    /**
     * Update the current organization.
     * @param   $org_slug
     * @return  View
     */
    public function put_update($org_slug)
    {
        // update org of $id
        $organization = Organization::where_slug($org_slug)->first();
        $organization->name = Input::get('name');
        $organization->slug = Str::slug($organization->name);
        $organization->save();

        return Redirect::to_action('organizations@edit', array($organization->slug))
        ->with('update_success', true);
    }

    public function delete_destroy()
    {

    }

}