<!-- DOC: Remove "hide" class to enable the page header actions -->
<div class="page-actions {{ $actions }}">
    <div class="btn-group">
        <button type="button" class="btn btn-circle btn-outline red dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-plus"></i>&nbsp;
            <span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;
            <i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="javascript:;">
                    <i class="icon-docs"></i> New Post </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-tag"></i> New Comment </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-share"></i> Share </a>
            </li>
            <li class="divider"> </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-flag"></i> Comments
                    <span class="badge badge-success">4</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-users"></i> Feedbacks
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
        </ul>
    </div>
</div>