@extends('layouts.app')

@section('content')
<style type="text/css">
    a.text-only{
        text-decoration: none;
        color: black;
    }
    a.text-only:hover{
        color: grey;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span><h4>Entity Biodata</h4></span>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{url('/home')}}" class="text-only">Back To Home</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-12">
                            <table id="entity-table" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">TTL</th>
                                        <th class="text-center">Posisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lamaran as $key => $lam)
                                    <tr>
                                        <td class="text-center">{{$key+1}}</td>
                                        <td class="text-center">{{$lam->nama}}</td>
                                        <td class="text-center">{{$lam->ttl}}</td>
                                        <td class="text-center">{{$lam->posisi}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#entity-table').DataTable();
    });
</script>
@endsection