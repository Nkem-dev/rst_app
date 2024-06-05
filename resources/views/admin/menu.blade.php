@extends('layout.admin')

@section('content')



<div class="content-body" style="min-height: 760px;">
    <div class="container">
        <div class="row">
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <!-- @if (session()->has('success'))
                    <div class="alert alert-success mt-4">
                        {{ session()->get('success') }}
                    </div>
                    @endif -->
                                    <h4 class="mb-sm-0">Menu</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xxl-10">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">Create Menus</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('add_menu') }}" method="POST" class="needs-validation createMenus-form">

                                            <div class="row">
                                                <div class="col-xxl-12 col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="categoryTitle" class="form-label">Menu
                                                          <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="categoryTitle" name="category" placeholder="Enter Menu">
                                                        <span class="text-danger"></span>

                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success">Add
                                                            Menu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div><!--end row-->




                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive table-card mb-1">
                                            <div class="card-header">
                                                <h3 class="card-title">List of Menus</h3>
                                            </div>

                                            <table class="table align-middle table-nowrap" id="orderTable">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th class="sort fw-bold">Menu </th>
                                                        <th class="sort fw-bold">Created At</th>
                                                        <th class="sort fw-bold">Updated At</th>
                                                        <th class="fw-bold">Action</th>
                                                    </tr>
                                                </thead>
                                                <!-- 24 Dec, 2022 -->
                                                <tbody class="list form-check-all">

                                                    <tr>
                                                        <td class="product_name"></td>
                                                        <td class="order_date">
                                                        </td>
                                                        <td class="delivery_date"></td>
                                                        <td>
                                                            <div class="d-flex gap-3">
                                                                <a onclick="return confirm('Are you sure you want to delete this menu')" class="remove-item-btn" href="">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <div class="flex items-center justify-center mt-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <div class="footer" style="margin-top: 550px;">
                    <div class="copyright">
                        <p>Copyright © Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection