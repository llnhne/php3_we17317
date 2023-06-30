@extends('layouts.app')

@section('content')
    <h1 class="mt-5 text-center">Đây là trang giới thiệu thông tin SV</h1>
    <p class="mt-3 text-center">My name's {{ $name }}. I'm 21 years old this year and live in Hanoi. I'm currently learning web programming at fpoly college.</p>
    <table class="table table-bordered text-center mt-3">
        <thead class="table-primary">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $id }}</th>
            <td>{{ $name }}</td>
            <td>{{ $birthday }}</td>
            <td>{{ $phone }}</td>
            <td>{{ $address }}</td>
            <td>{{ $city }}</td>
          </tr>
        </tbody>
      </table>
@endsection
