<div class="container-fluid">
    <div class="row-fluid">

@include('menus.left-sidebar')

        <div class="span6">
        	<div class="well">
        <p>
            {{ Form::open(Organization::current()->slug . '/workspaces', 'POST') }}
            {{ Form::label('workspace_name_label', 'What do you want to call your new workspace?') }}
            {{ Form::text('name') }}
            {{ Form::hidden(Auth::user()->current_organization_slug) }}
            {{ Form::label('access_settings', 'Access settings') }}
            <label class="radio">
                <input type="radio" name="privacy_setting" id="open_privacy_setting" value="1" checked>
                Open - visible and open for all employees to join
                <label class="checkbox">
                    {{ Form::checkbox('auto_join', 'yes', false, array('id' => 'admin-checker')) }} Automatically join new employees
                </label>
            </label>
            <label class="radio">
                <input type="radio" name="privacy_setting" id="private_privacy_setting" value="0">
                Private - invite only
            </label>
            <hr />
            {{ Form::button('Create', array('class' => 'btn btn-success')) }}
        </p>
</div><!--/well-->
        </div><!--/span-->

@include('menus.right-sidebar')

    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; Company 2012</p>
    </footer>

</div><!--/.fluid-container-->