@extends('layout.index')

@section('title', 'User | APERKAT')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <div class="mb-4">
                    <form action="{{ url()->current() }}" method="get">
                        <div class="row">
                            <div class="col-sm ">
                                <input class="form-control " type="text" id="keyword" name="keyword"
                                    value="{{ request('keyword') }}" placeholder="Keyword">
                            </div>
                            <div class="col-sm">
                                <button class="btn bg-primary btn-primary px-4" type="submit">Filter</button>
                                <a href="{{ url()->current() }}"><button class="btn bg-warning btn-warning px-4"
                                        type="button">Clear</button></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Whatsapp</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration + $users->firstItem() - 1 }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->whatsapp }}</td>
                                    <td>
                                        <button class="btn bg-danger btn-sm btn-danger" type="button">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right ">
                        {{ $users->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection