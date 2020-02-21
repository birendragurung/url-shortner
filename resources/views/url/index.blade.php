@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row pt-3">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-10">
                                    <span class="card-title">Urls</span>
                                </div>
                                <div class="col-2">
                                    <a href="{{ (url('urls/create')) }}">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created on</th>
                                    <th>Url | Tiny url</th>
                                    <th>Total visits</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($urls as $url)
                                    <tr>
                                        <td>{{ $url->id }}</td>
                                        <td>{{ $url->title  }}</td>
                                        <td>{{ $url->description  }}</td>
                                        <td><span class="tag tag-success">{{ $url->created_at->diffForHumans() }}</span>
                                        </td>
                                        <td><a href="{{ $url->url }}">{{ $url->url }}</a> |
                                            <a href="{{ url('t/'. $url->tiny_url ) }}">{{ url('t/'. $url->tiny_url ) }}</a>
                                        </td>
                                        <td>{{ $url->visits }}</td>
                                        <td>
                                            <a href="{{ url('urls/' . $url->id . '/edit') }}"><i class="fa fa-edit"></i></a>
                                            <a href="{{ url('urls/' . $url->id . '/delete') }}"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection