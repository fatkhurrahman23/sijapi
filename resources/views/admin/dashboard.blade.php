@extends('admin.admin')
@section('content')
    @vite('resources/css/dashboard.css')
    @vite('resources/js/dashboard.js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                            <h1>Dashboard</h1>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i></li>
                                <li>
                                    <a class="active" href="#">Home</a>
                                </li>
                            </ul>
                        </div>
                            <button href="#" class="btn-download">
                                <i class="bx bxs-cloud-download"></i>
                                <span class="text">Download PDF</span>
                            </button>
                        </div>

                        <ul class="box-info">
                            <li>
                                <i class="bx bxs-calendar-check"></i>
                                <span class="text">
                                <h3>1020</h3>
                                <p>New Order</p>
                                </span>
                            </li>
                            <li>
                                <i class="bx bxs-group"></i>
                                <span class="text">
                                <h3>2834</h3>
                                <p>Visitors</p>
                                </span>
                            </li>
                            <li>
                                <i class="bx bxs-dollar-circle"></i>
                                <span class="text">
                                <h3>$2543</h3>
                                <p>Total Sales</p>
                                </span>
                            </li>
                        </ul>

                        <div class="table-data">
                        <div class="order">
                            <div class="head">
                            <h3>Recent Orders</h3>
                            <i class="bx bx-search"></i>
                            <i class="bx bx-filter"></i>
                            </div>
                            <table>
                            <thead>
                                <tr>
                                <th>User</th>
                                <th>Date Order</th>
                                <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                                </tr>
                                <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status process">Process</span></td>
                                </tr>
                                <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                <td>
                                    <img src="img/people.png" />
                                    <p>John Doe</p>
                                </td>
                                <td>01-10-2021</td>
                                <td><span class="status completed">Completed</span></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div class="todo">
                            <div class="head">
                            <h3>Todos</h3>
                            <i class="bx bx-plus"></i>
                            <i class="bx bx-filter"></i>
                            </div>
                            <ul class="todo-list">
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </main> 
                </div> 
            </div>
        </div>
    </div>
@endsection