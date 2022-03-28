@extends('Backend.Layouts.master')
@section('headerFooter')
        <!-- Body: Body -->
        <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row clearfix g-3">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="row g-3 row-deck">
                            <div class="col-md-6 col-lg-6 col-xl-12  flex-column">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center flex-fill">
                                            <span class="avatar lg light-success-bg rounded-circle text-center d-flex align-items-center justify-content-center"><i class="icofont-users-alt-2 fs-5"></i></span>
                                            <div class="d-flex flex-column ps-3  flex-fill">
                                                <h6 class="fw-bold mb-0 fs-4">User</h6>
                                                <span class="text-muted">You Can View Edit Delete</span>
                                            </div>
                                            <i class="icofont-chart-bar-graph fs-3 text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix g-3">
                    <div class="col-xl-12 col-lg-12 col-md-12 flex-column">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                        <h6 class="mb-0 fw-bold ">User List</h6>
                                        <a href="{{route('user.add')}}" class="btn bg-success float-right text-white">Add User</a>   
                                    </div>
                                    <div class="card-body">
                                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No </th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Gender</th>
                                                    <th>Image</th>
                                                    <th>Created By</th>
                                                    <th>Updated By</th>
                                                    <th>Oparation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allData as $item => $value)
                                                <tr>
                                                    <td>{{$item+1}}</td>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->email}}</td>
                                                    <td>{{$value->mobile}}</td>
                                                    <td>{{$value->address}}</td>
                                                    <td>{{$value->gender}}</td>
                                                    <td><img src="{{(!empty($value->image))?asset('img/'.$value->imageLeft):asset('Backend/assets/images/xs/avatar5.jpg') }}" alt="Avatar" class="avatar sm rounded-circle me-2"></td>
                                                    <td>{{$value->created_at}}</td>
                                                    <td>{{$value->updated_at}}</td>
                                                    <td>
                                                        <a href="{{route('user.edit',$value->id)}}"><span class="badge bg-success">Edit</span></a>
                                                        <a href="{{route('user.delete',$value->id)}}"><span class="badge bg-danger">Delete</span></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
            </div>
        </div> 
@endsection