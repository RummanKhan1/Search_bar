@extends('app')

    @section('content')
        <div class="col-md-8">
            <h4>Job Table</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Job Tag</th>
                    <th>Location</th>
                    <th>Salary Range</th>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{$member->tag}}</td>
                            <td>{{$member->location}}</td>
                            <td>{{$member->salary_range}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
