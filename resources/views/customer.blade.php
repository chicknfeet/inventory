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
            padding-left: 1rem;
            padding-bottom: 1.5rem;
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
    <h1>Customer</h1>
    <br>

    <form action="{{route('customer.submit')}}" method="post">
        <label for="customerid">Customer ID</label>
        <input type="text" placeholder="customer id">
                
        <label for="firstname">First Name</label>
        <input type="text" placeholder="first name">
                
        <label for="lastname">Last Name</label>
        <input type="text" placeholder="last name">
                
        <label for="email">Email</label>
        <input type="email" placeholder="email">

        <label for="phone">Phone</label>
        <input type="text" placeholder="phone">
    </form>

    <table class="table table-dark table-striped">
        <thread>
            <tr>
                <td>Customer</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone</td>
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
    Category
@endsection