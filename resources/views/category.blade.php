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
            gap: 0.5rem;
            padding-bottom: 1.5rem;
            font-size: 18px;
            font-family: Garamond;
        }
        table{
            font-family: Garamond;
        }
        
    </style>

    <h1>Categories</h1>

    <div>
        <div class="row">
            <form action="{{route('saveCategories')}}" method="post">
            @csrf
                <label for="CategoryName" class="col"></label>
                <input class="inputs" type="text" name="CategoryName" placeholder="Category Name">

                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                    </tr>   
                </thead>

                <tbody>
                    @foreach($categories as $category )
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->CategoryName }}</td>
                            <td><a href="{{route('updateCategories', $category->id)}}"><button>Update</button></a></td>
                            <td><a href="{{route('removeCategories', $category->id)}}"><button>Delete</button></a></td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('title')
    Category
@endsection