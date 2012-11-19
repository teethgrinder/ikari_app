<div id="sidebar-right" class="span3">
    <div class="well">
        {{ Organization::get_current()->name}} Employee Network
        {{ HTML::link_to_action('organizations@edit', 'Edit', array(Organization::get_current()->slug, Organization::get_current()->id)) }}
        <hr />

    </div>
</div>
