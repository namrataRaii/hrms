@extends('admin.layout.master')
@section('content')

<div id="main-content">
            <div class="container-fluid">

                <div class="block-header py-lg-4 py-3">
                    <div class="row g-3">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="m-0 fs-5"><a href="javascript:void(0);" class="btn btn-sm btn-link ps-0 btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Employee List</h2>
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Lucid</a></li>
                                <li class="breadcrumb-item">Employee</li>
                                <li class="breadcrumb-item active">Employee List</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-end">
                            <div class="d-inline-flex text-start">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-user"></i> 1,784</h6>
                                    <small>Visitors</small>
                                </div>
                                <span id="bh_visitors"></span>
                            </div>
                            <div class="d-inline-flex text-start ms-lg-3 me-lg-3 ms-1 me-1">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-globe"></i> 325</h6>
                                    <small>Visits</small>
                                </div>
                                <span id="bh_visits"></span>
                            </div>
                            <div class="d-inline-flex text-start">
                                <div class="me-2">
                                    <h6 class="mb-0"><i class="fa fa-comments"></i> 13</h6>
                                    <small>Chats</small>
                                </div>
                                <span id="bh_chats"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="card-title">Employee List</h6>
                                <ul class="header-dropdown">
                                    <li>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#addEmployee">Add New</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <table id="employee_List" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input select-all" type="checkbox">
                                                </div>
                                            </th>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Employee ID</th>
                                            <th>Phone</th>
                                            <th>Join Date</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar1.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Marshall Nichols</h6>
                                                <span>marshall-n@gmail.com</span>
                                            </td>
                                            <td><span>LA-0215</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>24 Jun, 2015</td>
                                            <td>Web Designer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar2.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Susie Willis</h6>
                                                <span>sussie-w@gmail.com</span>
                                            </td>
                                            <td><span>LA-0216</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>28 Jun, 2015</td>
                                            <td>Web Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar3.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Debra Stewart</h6>
                                                <span>debra@gmail.com</span>
                                            </td>
                                            <td><span>LA-0218</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>21 July, 2015</td>
                                            <td>Web Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar4.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Francisco Vasquez</h6>
                                                <span>francis-v@gmail.com</span>
                                            </td>
                                            <td><span>LA-0222</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>18 Jan, 2016</td>
                                            <td>Team Leader</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar3.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Jane Hunt</h6>
                                                <span>jane-hunt@gmail.com</span>
                                            </td>
                                            <td><span>LA-0232</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>08 Mar, 2016</td>
                                            <td>Android Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar4.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Darryl Day</h6>
                                                <span>darryl.day@gmail.com</span>
                                            </td>
                                            <td><span>LA-0233</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>13 Nov, 2016</td>
                                            <td>IOS Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar5.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Marshall Nichols</h6>
                                                <span>marshall-n@gmail.com</span>
                                            </td>
                                            <td><span>LA-0215</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>24 Jun, 2015</td>
                                            <td>Web Designer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar1.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Susie Willis</h6>
                                                <span>sussie-w@gmail.com</span>
                                            </td>
                                            <td><span>LA-0216</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>28 Jun, 2015</td>
                                            <td>Web Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar2.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Debra Stewart</h6>
                                                <span>debra@gmail.com</span>
                                            </td>
                                            <td><span>LA-0218</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>21 July, 2015</td>
                                            <td>Web Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar3.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Francisco Vasquez</h6>
                                                <span>francis-v@gmail.com</span>
                                            </td>
                                            <td><span>LA-0222</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>18 Jan, 2016</td>
                                            <td>Team Leader</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar4.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Jane Hunt</h6>
                                                <span>jane-hunt@gmail.com</span>
                                            </td>
                                            <td><span>LA-0232</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>08 Mar, 2016</td>
                                            <td>Android Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check d-inline-flex mt-1">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <img src="assets/images/xs/avatar5.jpg"
                                                    class="rounded-circle avatar" alt="">
                                            </td>
                                            <td>
                                                <h6 class="mb-0">Darryl Day</h6>
                                                <span>darryl.day@gmail.com</span>
                                            </td>
                                            <td><span>LA-0233</span></td>
                                            <td><span>+ 264-625-2583</span></td>
                                            <td>13 Nov, 2016</td>
                                            <td>IOS Developer</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger js-sweetalert"
                                                    title="Delete" data-type="confirm"><i
                                                        class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

            <!-- Default Size -->
    <div class="modal fade" id="addEmployee" tabindex="-1" aria-labelledby="addEmployee" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Add Contact</h5>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email ID">
                        </div>
                        <div class="col-12">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Employee ID">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Join Date">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Role">
                        </div>
                        <div class="col-12">
                            <input type="file" class="form-control-file" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted d-block">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            <hr>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Facebook">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Twitter">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Linkedin">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="instagram">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('externaljs')
<script>
    $(document).ready(function () {
        $('#employee_List')
        .dataTable({
            responsive: true,
            columnDefs: [
                {
                    orderable: false,
                    targets: [0]
                }
            ]
        });
    });
</script>
@endsection