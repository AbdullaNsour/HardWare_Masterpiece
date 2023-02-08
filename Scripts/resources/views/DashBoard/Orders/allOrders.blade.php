@extends('DashBoard.dashLayout')
@section('tittle')
    Manage All Orders
@endsection
@section('allorders')
    active
@endsection
@section('css')
    <style>
        .success {
            background-color: #dff0d8;
        }

        .danger {
            background-color: #ecbebe;
        }

        .table-title {
            padding-bottom: 15px;
            background: #222E3C;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .close {
            position: absolute;
            right: 3%;
            top: 3%;
            width: 32px;
            height: 32px;
            opacity: 0.3;
        }

        .close:hover {
            opacity: 1;
        }

        .close:before,
        .close:after {
            position: absolute;
            left: 15px;
            content: ' ';
            height: 33px;
            width: 2px;
            background-color: rgb(150, 26, 26);
        }

        .close:before {
            transform: rotate(45deg);
        }

        .close:after {
            transform: rotate(-45deg);
        }
    </style>
@endsection
@section('body')
    <div class="container">
        <div class="table-title ">
            <h2 class="text-light ">All <b>Orders</b></h2>
        </div>

        {{-- let's do it as a table  --}}
        <table class="table table-responsive">
            <thead class="table-responsive">
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Action</th>
                    <th>Status</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr
                        class="@if ($order->status == 'completed') success
                        @elseif ($order->status == 'canceled')
                        danger @endif">
                        <td>
                            <div class="order-id"># {{ $order->id }}</div>
                        </td>
                        <td> {{ $order->user->name }}</td>
                        <td>
                            <div class="order-content">
                                <div>
                                    <b>Date Added:</b> {{ date_format($order->created_at, 'Y/m/d') }}<br>
                                    <b>Time Added:</b> {{ date_format($order->created_at, 'h:i A') }}<br>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="order-content">
                                <div>
                                    <b>Products</b> {{ count($order->products) }} <br>
                                    {{ number_format($order->total_price, 2) }} JD
                                </div>
                            </div>
                        </td>
                        <td>
                            <div id="case2" class="order-status">{{ $order->status }}</div>
                        </td>

                        <td>
                            <div class="card-body">
                                {{-- <div id="case2" class="order-status">{{ $order->status }}</div> --}}
                                <form class="form-inline" action="{{ url("/admin/updateorder/$order->id") }}" method="POST"
                                    id="case1">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-8 ">
                                            <select class="form-select" name="status">
                                                <option selected value="{{ $order->status }}">{{ $order->status }}
                                                </option>
                                                @if ($order->status != 'pending')
                                                    <option value="pending">pending</option>
                                                @endif
                                                @if ($order->status != 'canceled')
                                                    <option value="canceled">canceled</option>
                                                @endif
                                                @if ($order->status != 'completed')
                                                    <option value="completed">completed</option>
                                                @endif
                                                @if ($order->status != 'shipped')
                                                    <option value="shipped">shipped</option>
                                                @endif
                                                @if ($order->status != 'declined')
                                                    <option value="declined">declined</option>
                                                @endif
                                                @if ($order->status != 'request return')
                                                    <option value="request return">request return</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="submit" class="btn btn-warning  " value="update">
                                        </div>
                                    </div>
                                </form>
                                {{-- <button id="toggle" class="btn btn-primary my-3">Change order status</button> --}}
                            </div>
                        </td>
                        <td> <a href="{{ url("/admin/showorder/$order->id") }}">
                                <button class="btn btn-success">View order details</button>
                            </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="row mt-5">
            @foreach ($orders as $order)
                <div class="col-sm-3">
                    <div class="card ">
                        <a href="{{ url("/admin/deleteorder/$order->id") }}" class="close"></a>
                        <div class="card-body">
                            <div class="order-id"><b>Order ID:</b># {{ $order->id }}</div>
                            <div id="case2" class="order-status"><b>Status:</b> {{ $order->status }}</div>
                            <form class="form-inline" action="{{ url("/admin/updateorder/$order->id") }}" method="POST"
                                style="display: none" id="case1">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-8 ">
                                        <select class="form-select" name="status">
                                            <option selected value="{{ $order->status }}">{{ $order->status }}</option>
                                            @if ($order->status != 'pending')
                                                <option value="pending">pending</option>
                                            @endif
                                            @if ($order->status != 'canceled')
                                                <option value="canceled">canceled</option>
                                            @endif
                                            @if ($order->status != 'completed')
                                                <option value="completed">completed</option>
                                            @endif
                                            @if ($order->status != 'shipped')
                                                <option value="shipped">shipped</option>
                                            @endif
                                            @if ($order->status != 'declined')
                                                <option value="declined">declined</option>
                                            @endif
                                            @if ($order->status != 'request return')
                                                <option value="request return">request return</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="submit" class="btn btn-warning  " value="update">
                                    </div>
                                </div>
                            </form>
                            <div class="order-content">
                                <div>
                                    <b>Date Added:</b> {{ date_format($order->created_at, 'Y/m/d') }}<br>
                                    <b>Time Added:</b> {{ date_format($order->created_at, 'h:i A') }}<br>
                                    <b>Products</b> {{ count($order->products) }}
                                </div>
                                <div><b>Customer:</b> {{ $order->user->name }}<br>
                                    <b>Total:</b> {{ number_format($order->total_price, 2) }} JD
                                </div>
                            </div>
                            <a href="{{ url("/admin/showorder/$order->id") }}">
                                <button class="btn btn-warning mt-3">View order details</button>
                            </a>
                            <button id="toggle" class="btn btn-primary my-3">Change order status</button>

                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
    </div>
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("div #toggle").click(function() {
                $(this).siblings("#case1").toggle();
                $(this).siblings("#case2").toggle();
            });
        });
    </script>
@endsection
