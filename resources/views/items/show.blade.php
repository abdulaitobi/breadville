@extends('layouts.app')

@section('content')
        <h1 style="text-align: center; color: white; margin-top:30px; font-size:50px">
            @if ($items->count())
                @foreach ($items as $item)
                    {{ $item->category }}
                @endforeach
            @endif
        </h1>
    <div style="background-color:white; margin-top:50px;" class="d-flex justify-content-center container">
        <table class="table datatable" style="color: grey; border:white; width: 500px; ">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                @if ($items->count())
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->amount }}</td>
                        </tr>
                    @endforeach
                    {{ $items->links() }}
                @else
                    <p style="text-align: center; font-size: 20px; color:aliceblue">There are no items</p>
                @endif
            </tbody>
        </table>
    </div>
@endsection