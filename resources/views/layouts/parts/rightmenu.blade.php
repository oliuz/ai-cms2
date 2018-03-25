<div class="ui right sidebar">
    <div class="ui pointing secondary two item tabular menu">
        <a class="item active" data-tab="first">
            <i class="red icon ion-chatbox-working icon"></i>
        </a>

        <a class="item" data-tab="fourth">
            <i class="blue icon ion-gear-a"></i>
        </a>
    </div>
    <div class="ui tab active" data-tab="first">
        <div class="ui small feed">
            <h4 class="ui header">Followers Activity</h4>
            <div class="event">
                <div class="label">
                    <img src="img/avatar/people/carol.png" alt="label-image" />
                </div>
                <div class="content">
                    <div class="summary">
                        You added
                        <a>Jenny Hess</a> to your
                        <a>coworker</a> group.
                        <div class="date">
                            3 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui tab" data-tab="fourth">
        <div class="ui form fluid">
            <div class="grouped fields">
                <label>Notifications</label>
                <div class="field">
                    <div class="ui toggle checkbox">
                        <input type="checkbox" checked name="public">
                        <label class="coloring red">Enabled</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="public">
                        <label class="coloring green">Updates</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui divider"></div>
        @include('layouts.parts.colortheme')
    </div>
</div>