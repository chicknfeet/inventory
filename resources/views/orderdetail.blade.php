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

        input{
            width: 10%;
        }
    </style>

    <br>
    <h1>Order Detail</h1>
    <br>

    <form action="{{route('product.submit')}}" method="post">
        <label for="orderdetailid">Order Detail ID</label>
        <input type="number" placeholder="order detail id">
                
        <label for="orderid">Order ID</label>
        <input type="number" placeholder="order id">
                
        <label for="product id">Product ID</label>
        <input type="number" placeholder="product id">
                
        <label for="quality">Quantity</label>
        <input type="number" placeholder="quantity">

        <label for="subtotal">Subtotal</label>
        <input type="number" placeholder="subtotal">
    </form>

    <table class="table table-dark table-striped">
        <thread>
            <tr>
                <td>Order Detail ID</td>
                <td>Order ID</td>
                <td>Product ID</td>
                <td>Quantity</td>
                <td>Subtotlal</td>
            </tr>   
        </thread>

        <tbody>
            <tr>
                <td>qwe</td>
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
                <td>qwe</td>
            </tr>
        </tbody>
    </table>

@endsection

@section('title')
    Order
@endsection