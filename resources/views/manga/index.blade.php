@extends('layouts.admin')

@section('content')
<div class="sixteen wide computer column">
    <div class="ui segments">
        <div class="ui segment">
            <h5 class="ui header">Manga List</h5>
        </div>
        <div class="ui three column grid horizontal segments">
            <div class="column p-0 ui segment compact">
                <loading data-name="loading-manga">
                    <div class="ui indeterminate text loader">Loading Data</div>
                </loading>
                <manga-list data-api="{{ route('manga.list') }}"
                    data-store="{{ route('manga.store') }}"></manga-list>
            </div>
            <div class="column p-0 ui segment compact" id="test">
                <div class="ui dimmer">
                    <div class="ui indeterminate text loader">Loading Data</div>
                </div>
                <div class="ui items manga">
                    <div class="ui fluid right icon left action input search">
                        <button class="ui icon green large button">
                            <i class="plus icon"></i>
                        </button>
                        <i class="search icon"></i>
                        <input type="text" placeholder="Search Chapter...">
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">Chapter 1</a>
                            <div class="extra">
                                <p>Upload at : 28-03-2018 02:00</p>
                                <p>Upload by : Administrator</p>
                            </div>
                        </div>
                        <div class="control">
                            <div class="ui vertical large buttons">
                                <button class="ui basic icon button">
                                    <i class="folder open icon"></i>
                                </button>
                                <button class="ui red icon button">
                                    <i class="trash icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">Chapter 2</a>
                            <div class="extra">
                                <p>Upload at : 28-03-2018 02:00</p>
                                <p>Upload by : Administrator</p>
                            </div>
                        </div>
                        <div class="control">
                            <div class="ui vertical large buttons">
                                <button class="ui basic icon button">
                                    <i class="folder open icon"></i>
                                </button>
                                <button class="ui red icon button">
                                    <i class="trash icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ui pagination">
                        <button class="ui large icon basic button">
                            <i class="fast backward icon"></i>
                        </button>
                        <button class="ui large icon basic button">
                            <i class="step backward icon"></i>
                        </button>
                        <span>Showing 2 to 10 of 100 items</span>
                        <button class="ui large icon basic button">
                            <i class="step forward icon"></i>
                        </button>
                        <button class="ui large icon basic button">
                            <i class="fast forward icon"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="column p-0 ui segment compact">
                <div class="ui dimmer">
                    <div class="ui indeterminate text loader">Loading Data</div>
                </div>
                <div class="no-data">No Data</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function () {
    $('#test').transition('hide')

    setTimeout(() => {
        $('#test').transition('fade left')
    }, 1000)
})
</script>
@endsection