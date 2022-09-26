@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
    <h1>This is Homepage</h1>
    <h4>Hello {{$name}}, your role is {{$role}}</h4>

    {{-- @if (strtolower($role) == 'admin')
        <a href="">ke halaman admin</a>
    @elseif (strtolower($role) == 'staff')
        <a href="">ke halaman gudang</a>
    @else
        <a href="">ke halaman whatever</a>
    @endif --}}

    @switch($role)
        @case(strtolower($role) == 'admin')
            <a href="">ke halaman admin</a>
            @break
        @case(strtolower($role) == 'staff')
            <a href="">ke halaman gudang</a>
            @break
        @default
        <a href="">ke halaman whatever</a>
    @endswitch

    <br> <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fruit as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection