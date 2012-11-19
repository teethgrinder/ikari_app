<div class="container-fluid">
    <div class="row-fluid">

        @include('organization._left-sidebar-partial')
        <div class="span6">
            <div class="well">
                <p>
                {{ Form::open('organizations@create', 'POST') }}
                {{ Form::label('organization_name_label', 'Organization name') }}
                {{ Form::text('name') }}
                <hr />
                {{ Form::button('Save', array('class' => 'btn btn-success')) }}
                {{ Form::close() }}
                </p>
            </div><!--/well-->
        </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; Company 2012</p>
    </footer>

</div><!--/.fluid-container-->