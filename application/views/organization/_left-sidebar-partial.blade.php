<div id="sidebar-left" class="span3">
    <div class="well sidebar-nav">
        <ul class="nav nav-list">
            <li class="nav-header">Organization</li>
            <ul class="nav">
                <span class="organisation-pic-thumb">
                    <img alt="" class="pull-left" src="" />
                </span>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ dd('test') }}
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (Auth::user()->organizations as $organization)
                        <li><a href="#">{{ $organization->name }}</a></li>
                        @endforeach
                        <li class="divider"></li>

                        <li>
                            <a href="{{ URL::to_action('organizations@edit', Organization::get_current()->slug) }}">
                                <i class="icon-cog"></i>Settings
                            </a>
                        </li>
                        <li><a href="#"><i class="icon-signout"></i>Leave organisation</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to_action('organizations@new') }}">
                                <i class="icon-plus"></i>Create New Organization
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="divider"></li>
            </ul>
            </li>
            <li class="nav-header">Public Workspaces</li>

            <li class="{{ URI::is('employee-network') ? 'active' : '' }}">
                {{ HTML::link_to_action('organizations@show', 'Employee Network', Organization::get_current()->slug) }}
            </li>
            @foreach (Organization::get_current()->workspaces as $workspace)
            <li class="{{ URI::is($workspace->id) ? 'active' : '' }}">
                <a href="{{ URL::to_action('workspaces@show', array(Organization::get_current()->slug, $workspace->id)) }}">
                    {{ $workspace->name }}</a>
            </li>
            @endforeach
            <li class="divider"></li>
            <li class="nav-header">Private Workspaces</li>
            <li class="divider"></li>

            <a href="{{ URL::to_action('workspaces@new', Organization::get_current()->slug)  }}" class="btn btn-success">
                <i class="icon-plus"></i> Create a workspace</a>

        </ul>
    </div><!--/.well -->
</div><!--/span-->