<div class="container-fluid">
    <div class="row-fluid">

@include('menus.left-sidebar')
        <div class="span6">
            <div class="well">
        <p>
        @if (Session::has('update_success'))
            <div class="alert alert-success">
                Organization settings updated.
            </div>
        @endif

            {{ Form::open(Organization::get_current()->slug, 'PUT') }}
            {{ Form::label('workspace_name_label', 'Organization name') }}
            {{ Form::text('name', Organization::get_current()->name) }}
            <hr />
            {{ Form::button('Save', array('class' => 'btn btn-success')) }}
        </p>
</div><!--/well-->
        </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; Company 2012</p>
    </footer>

</div><!--/.fluid-container-->