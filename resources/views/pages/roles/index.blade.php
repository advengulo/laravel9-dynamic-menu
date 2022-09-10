@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/izitoast/dist/css/iziToast.min.css') }}">

@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Roles</h1>
            </div>

            <div class="section-body">
                <a href="#" id="btn-add-role"
                    class="btn btn-icon icon-left btn-primary mb-3"><i class="fas fa-plus"></i>Add</a>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table-md table">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td><a href="#"
                                                    class="btn btn-secondary">Detail</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link"
                                                href="#"
                                                tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    //Modal
    <form class="modal-part"
        id="modal-add-role">
        <div class="form-group">
            <label>Role</label>
            <div class="input-group">
                <input type="text"
                    class="form-control"
                    name="name"
                    placeholder="Role"
                    autocomplete="off">
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        // Global variable built using blade
        var store = '{{ route('roles.store') }}';
    </script>

    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('library/izitoast/dist/js/iziToast.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
    <script src="{{ asset('js/blade/roles.js') }}"></script>
@endpush
