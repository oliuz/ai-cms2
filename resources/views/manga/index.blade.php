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
                    data-store="{{ route('manga.store') }}"
                    data-delete="{{ route('manga.delete') }}"
                    data-update="{{ route('manga.update') }}"></manga-list>
            </div>
            <div class="column p-0 ui segment compact" id="test">
                <loading data-name="loading-chapter">
                    <div class="ui indeterminate text loader">Loading Data</div>
                </loading>
                <chapter-list data-api="{{ route('chapter.list') }}"
                    data-store="{{ route('chapter.store') }}"
                    data-delete="{{ route('chapter.delete') }}"
                    data-update="{{ route('chapter.update') }}"></chapter-list>
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
})
</script>
@endsection