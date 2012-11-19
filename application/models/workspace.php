<?php
class Workspace extends Eloquent
{
    public static function create_workspace($input)
    {
        // Validation rules
        $rules = array('name' => 'required', 'privacy_setting' => 'required');
        $validation = Validator::make($input, $rules);

        $name = $input['name'];
        $privacy_setting = $input['privacy_setting'];
        $auto_join = Input::has('auto_join');
        $slug = Str::slug($name);

        // Create workspace. insert() won't return updated model. Manually insert to both tables and attach the pivot table
        // Insert new workspace (and return updated model)
        $workspace = Workspace::create(array('name' => $name, 'public' => $privacy_setting, 'slug' => $slug ));
        // Get current organization
        $organization = Organization::find(Organization::get_current()->id);
        // Insert relationship into pivot table
        $organization->workspaces()->attach($workspace->id);

        return $workspace;
    }

    public static function current()
    {
        // Get current workspace
        $organization = Organization::get_current();
        $current_workspace_id = (int)URI::segment(3);
        $workspace = $organization->workspaces()->where_workspace_id($current_workspace_id)->first();
        return $workspace;
    }

    public function organizations()
    {
        return $this->has_many_and_belongs_to('Organization');
    }

}