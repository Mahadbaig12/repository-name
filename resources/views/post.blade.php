@extends('layouts.supermaster')

@section('post')
<div class="container py-5">
    <div class="row">
        <div class="content">
            <h2 class="text-center mb-4">Products Table</h2>

            <div class="d-flex justify-content-between mb-4">
                <a class="btn btn-success" href="{{ route('formadd') }}">Add New Product</a>
                <a class="btn btn-danger" href="{{ route('deleteall') }}">Delete All</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                          
                        
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($persons as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                               
                            
                                <td>
                                    @if ($item->photo)
                                        <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" width="80" height="60">
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('view.person', ['id' => $item->id]) }}" title="View">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="blue" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('delete.person', ['id' => $item->id]) }}" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0A.5.5 0 0 1 8.5 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zM11 6a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4H2.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ route('update.person', ['id' => $item->id]) }}" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="green" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168z"/>
                                                <path d="M11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        @if ($persons->isEmpty())
                            <tr>
                                <td colspan="6">No records found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $persons->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
