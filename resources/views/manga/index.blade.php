@extends('layouts.admin')

@section('content')
<div class="sixteen wide computer column">
    <div class="ui segments">
        <div class="ui segment">
            <h5 class="ui header">Manga List</h5>
        </div>
        <div class="ui grid horizontal segments">
            <div class="ui segment five wide column p-0">
                <div class="ui items manga">
                    <div class="ui fluid right icon left action input search">
                        <button class="ui icon green large button">
                            <i class="plus icon"></i>
                        </button>
                        <i class="search icon"></i>
                        <input type="text" placeholder="Search Manga...">
                    </div>
                    <div class="item">
                        <div class="content">
                            <a class="header">Shannon Garcia</a>
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
                            <a class="header">Shannon Garcia</a>
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
            <div class="ui segment five wide column p-0">
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
            <div class="ui segment six wide column">
                <p>Detail manga or chapter</p>
            </div>
        </div>
    </div>
</div>
@endsection