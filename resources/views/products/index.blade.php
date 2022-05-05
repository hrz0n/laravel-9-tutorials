@extends('templates.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Products</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{route('products.create')}}" class="btn btn-info btn-icon-text mb-2 mb-md-0">
                <i data-feather="plus"></i> Add New Product
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            @if ($message = session('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-sm table-hover mb-0">
                    <thead>
                    <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Product Name</th>
                        <th class="pt-0">Product Detail</th>
                        <th class="pt-0">Product Image</th>
                        <th class="pt-0">Created At</th>
                        <th class="pt-0">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $index => $val)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->detail}}</td>
                            <td><img alt="img" src="/img/{{ $val->image }}" width="100px"></td>
                            <td>{{ $val->created_at }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$val->id) }}" method="POST">
                                    {{ csrf_field()  }}
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-success" href="{{route('products.show', $val->id)}}"><i data-feather="eye"></i> Show</a>
                                    <a class="btn btn-sm btn-warning" href="{{route('products.edit', $val->id)}}"><i data-feather="link"></i> Edit</a>
                                    <button class="btn btn-sm btn-danger" type="submit"><i data-feather="trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
