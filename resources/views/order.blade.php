@extends('layout.app')

@section('content')

    <style>
        h1{
            text-align: center;
            font-family: Algerian; 
            font-size: 100px;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        form{
            display: flex;
            gap: 1rem;
            padding-bottom: 1.5rem;
            padding-left: 1rem;
            font-size: 18px;
            font-family: Garamond;
        }
        table{
            font-family: Garamond;
        }
    </style>

    <br>
    <h1>Order</h1>
    <br>

    <form action="{{route('order.submit')}}" method="post">
        <label for="orderid">Order ID</label>
        <input type="text" placeholder="order id">
                
        <label for="orderdate">Order Date</label>
        <input type="text" placeholder="order date">
                
        <label for="totalammount">Total Ammount</label>
        <input type="number" placeholder="0">
                
        <label for="status">Status</label>
        <input type="text" placeholder="status">
    </form>


    <table class="table table-dark table-striped">
        <thread>
            <tr>
                <td>Order ID</td>
                <td>Order Date</td>
                <td>Total Ammount</td>
                <td>Status</td>
            </tr>   
        </thread>

        <tbody>
            <tr>
                <td>qwe</td>
                <td>qwe</td>
                <td>qwe</td>
                <td>qwe</td>
            </tr>
            <tr>
                <td>qwe</td>
                <td>qwe</td>
                <td>qwe</td>
                <td>qwe</td>
            </tr>
        </tbody>
    </table>


@endsection

@section('title')
    Order
@endsection