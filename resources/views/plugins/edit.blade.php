@extends('layout');

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <form method="POST" action="/plugins/{{ $plugin->id }}">
                @csrf
                @method('PUT')

                <table class="table">
                    <tr class="titlearea">
                        <td id="title" style="display: none;">Plugin</td>
                        <td class="title" colspan="2">Edit Plugin</td>
                        <td>Public <input type="checkbox" name="public" id="public" value="1" {{ ($plugin->public ? 'checked' : '') }}></td>
                    </tr>

                    <tr>
                        <td class="label">Title</td>
                        <td><input class="form-control" type="text" name="title" id="title" value="{{ $plugin->title }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Description</td>
                        <td>
                            <textarea class="form-control" name="description" id="description" value="{{ $plugin->description }}">{{ $plugin->description }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Repository URL</td>
                        <td><input class="form-control" type="text" name="repository_url" id="repository_url" value="{{ $plugin->repository_url }}"></td>
                    </tr>
                    <tr>
                        <td class="label">GitHub URL</td>
                        <td><input class="form-control" type="text" name="github_url" id="github_url" value="{{ $plugin->github_url }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Developer</td>
                        <td><input class="form-control" type="text" name="developer" id="developer" value="{{ $plugin->developer }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Install Path</td>
                        <td><input class="form-control" type="text" name="install_path" id="install_path" value="{{ $plugin->install_path }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Wiki URL</td>
                        <td><input class="form-control" type="text" name="wiki_url" id="wiki_url" value="{{ $plugin->wiki_url }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Information URL</td>
                        <td><input class="form-control" type="text" name="info_url" id="info_url" value="{{ $plugin->info_url }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Plugin URL</td>
                        <td><input class="form-control" type="text" name="plugin_url" id="plugin_url" value="{{ $plugin->plugin_url }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Category by</td>
                        <td><input class="form-control" type="text" name="category_id" id="category_id" value="{{ $plugin->category_id }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Requested by</td>
                        <td><input class="form-control" type="text" name="requested_by" id="requested_by" value="{{ $plugin->requested_by }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Requester</td>
                        <td><input class="form-control" type="text" name="requester" id="requester" value="{{ $plugin->requester }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Year Added</td>
                        <td><input class="form-control" type="text" name="year_added" id="year_added" value="{{ $plugin->year_added }}"></td>
                    </tr>
                    <tr>
                        <td class="label">Number of Uses</td>
                        <td><input class="form-control" type="text" name="uses_number" id="uses_number" value="{{ $plugin->uses_number }}"></td>
                    </tr>
                </table>


                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link btn btn-primary mb-3" type="submit">Submit</button>
                        <a href="/plugins" class="button0 is-text btn mb-3">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
