<?php
class Workspaces_Controller extends Base_Controller {

    public $restful = true;

    public function get_index()
    {

    }

    public function get_show()
    {
        $organization = Organization::find(Organization::get_current()->id);
        $current_workspace_id = (int)URI::segment(3);
        $workspace = $organization->workspaces()->where_workspace_id($current_workspace_id)->first();
        $this->layout->content = View::make('workspace.show');
    }


    public function get_new()
    {
        $this->layout->content = View::make('workspace.new');
    }

    public function get_edit()
    {

    }

    public function post_create()
    {
        // Get POST data
        $input = Input::get();
        $current_organization_slug = Organization::get_current()->slug;
        // Create the workspace
        $workspace = Workspace::create_workspace($input);

        return Redirect::to($current_organization_slug . '/workspaces/' . $workspace->id)
            ->with('workspace_name', $workspace->name);
    }

    public function put_update()
    {

    }

    public function delete_destroy()
    {

    }

}