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
            gap: 0.5rem;
            padding-bottom: 1.5rem;
            font-size: 18px;
            font-family: Garamond;
        }
        table{
            font-family: Garamond;
        }
        
    </style>

    <h1>Supplier</h1>

    <div>
        <div class="row">
            <form action="{{route('saveSuppliers')}}" method="post">

            <label for="SupplierName"></label>
            <input class="inputs" type="text" name="SupplierName" placeholder="Supplier Name">
                    
            <label for="ContactInformation"></label>
            <input class="inputs" type="text" name="ContactInformation" placeholder="Contact Information">
                    
            <label for="Address"></label>
            <input class="inputs" type="text" name="Address" placeholder="Address">

            <div class="col">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Supplier ID</th>
                    <th>Supplier Name</th>
                    <th>Contact Information</th>
                    <th>Address</th>
                </tr>   
            </thead>

            <tbody>
                @foreach($suppliers as $supplier )
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->SupplierName }}</td>
                        <td>{{ $supplier->ContactInformation }}</td>
                        <td>{{ $supplier->Address }}</td>
                        <td><a href="{{route('updateSuppliers', $supplier->id)}}"><button>Update</button></a></td>
                        <td><a href="{{route('removeSuppliers', $supplier->id)}}"><button>Delete</button></a></td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('title')
    Supplier
@endsection