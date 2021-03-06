@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <table class="table">
                <tr class="titlearea">
                    <td id="title" class="title">Upload CSV File</td>
                    <td class="title-actions">
                    </td>
                </tr>
            </table>

            <p></p>
            <!-- Message -->
            @if(Session::has('message'))
                <p >{{ Session::get('message') }}</p>
            @endif

            <!-- Form -->
            <form method='post' action='/uploadFile' enctype='multipart/form-data' >
                {{ csrf_field() }}
                <input type='file' name='file' >
                <input id="import_data" type='submit' name='submit' value='Import'>
            </form>
        </div>
    </div>
@endsection
