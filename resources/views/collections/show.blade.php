@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="filter_input">
                <input type="text" id="filter" onkeyup="filter()" placeholder="Filter by...">
            </div>
            <table class="table">
                <tr class="titlearea">
                    <td id="title" class="title">Collection</td>
                    <td class="title-actions">
                        <a href="/collections/duplicate/{{ $collection->id }}" class="button is-text btn btn-sm">Duplicate</a>
                        <a href="/collections/add/{{ $collection->id }}" class="button is-text btn btn-sm">Add</a>
                        <a href="/collections/edit/{{ $collection->id }}" class="button is-text btn btn-sm">Edit</a>
                        <a href="/collections/exportPlugins/{{ $collection->id }}" class="button is-text btn btn-sm btn-success">Export Plugins</a>
                        <a
                            href="/collections/delete/{{ $collection->id }}"
                            class="button is-text btn btn-sm btn-danger"
                            onclick="return confirm('Really deleting the entire collection \'{{ $collection->name }}\'?')"
                        >
                            Delete
                        </a>
                    </td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td class="label">Name</td>
                    <td class="data">{{ $collection->name }}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="label">Moodle Branch</td>
                    <td class="data">{{ $collection->branch->name }}</td>
                    <td class="label">Plugins</td>
                    <td id="plugins_number" class="data">{{ $collection->plugins()->count() }}</td>
                </tr>
                <tr>
                    <td class="label">Description</td>
                    <td class="data" colspan="3">{{ $collection->description }}</td>
                </tr>
            </table>

            <table class="table">
                <thead>
                <tr>
                    <th>Plugin</th>
                    <th>Description</th>
                    <th>Path</th>
                    <th>Commit ID</th>
                    <th>Tag</th>
                </tr>
                </thead>
                <tbody>
                @foreach($collection->plugins as $plugin)
                    <tr class="plugin">
                        <td class="data-column"><a href="/plugins/{{ $plugin->id }}">{{ $plugin->title }}</a></td>
                        <td class="data-column">{{ $plugin->description }}</td>
                        <td class="data-column install_path">{{ $plugin->install_path }}</td>
                        @foreach($collection->commits as $commit)
                            @if($plugin->hasCommit($commit->id))
                                <td class="data-column"><a href="/commits/{{ $commit->id }}">{{ substr($commit->commit_id,0,10).'...' }}</a></td>
                                <td class="data-column">{{ $commit->tag }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
