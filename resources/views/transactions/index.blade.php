@extends('layouts.app')

@section('content')
    <style>
        label{
            font-size: 20px;
        }
    </style>
    <div class="container">
        @auth
            <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
            <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
            <h1 style="text-align:center; color:white; margin-top:50px">Transactions</h1>
            <div role="alert">
                @if(session('success')) 
                    <p class="alert alert-info" style="text-align: center; font-size: 20px;">Transaction deleted</p>
                @endif
            </div>
            <div class="row">
                <div class=" col d-flex justify-content-center" id="container" style="width:300px; height:350px; text-align:center; margin-left:auto; margin-right:auto; margin-top:30px;"></div>
                <div class=" col d-flex justify-content-center" style="margin-left:auto; margin-right:auto;">
                    <table class="table datatable" style="color: black; border:black; background-color:white; text-align:center ">
                        <thead>
                        <tr>
                            <th scope="col">Amount</th>
                            <th scope="col">Type</th>
                            <th scope="col">Item</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if ($transactions->count())
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->amount }}</td>
                                        <td>{{ $transaction->type }}</td>
                                        <td>{{ $transaction->item }}</td>
                                        <td>
                                            <form action="{{ route('transactions.destroy', $transaction) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-blue-500">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{ $transactions->links() }}
                            @else
                                <p style="text-align: center; font-size: 20px; color:aliceblue">There are no transactions</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" class="btn btn-primary" style="text-align:center;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add Transaction
            </button>
        @endauth
    </div>

    <script type="text/javascript">
        var json = <?php echo json_encode($transaction_array); ?>;

        makeChart();

        function makeChart() {
            anychart.onDocumentReady(function() {

                var chart = anychart.pie();

                // set the chart title
                chart.title("Transactions");

                // add the data
                chart.data(json);

                // display the chart in the container
                chart.container('container');
                chart.draw();

            });
        }
    </script>
            <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form style="text-align: center; margin-top:80px; max-width:1000px;" action="{{ route('transactions') }}" method="post" class="mb-4">
                                @csrf
                                <h1 class="fs-1" style="color:black">Transactions</h1>
                                <div class="mb-4">
                                    <label style="color: aliceblue" for="amount" class = "sr-only">Add amount</label>
                                    <input style=" width:80%; margin-left: auto; margin-right:auto;" name="amount" id="amount" class="form-control @error('name') border-red-500 @enderror" placeholder="Add amount" required/>
                                    @error('name')
                                    <div class="texr-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label style="color: aliceblue" for="type" class = "sr-only">Transaction type</label>
                                    <select name="type" id="type" required>
                                        <option value="sales">Sales</option>
                                        <option value="restock">Restock</option>
                                    </select>
                                    @error('email')
                                    <div class="texr-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label style="color: aliceblue" for="description" class = "sr-only">Add description</label>
                                    <select name="item" id="item" required>
                                        @if ($items->count())
                                            @foreach ($items as $item)
                                                <option value="{{ $item->name }}-{{ $item->category }}-{{ $item->amount }}">{{ $item->name }}-{{ $item->category }}-{{ $item->amount }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('name')
                                    <div class="texr-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-outline-primary">
                                    Add
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection