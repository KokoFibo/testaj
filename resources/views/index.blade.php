@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Customer</h3>
            </div>
            <div class="card body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->email }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $customer->onEachSide(1)->links() }}

            </div>
        </div>
    </div>
@endsection
