@extends('layout.mainlayout')
@section('content')
    <p class="ms-2 mt-3" id="dashboard">Dashboard</p>
    <div class="container shadow mt-3 ms-2 p-3 bg-white rounded">
        <div class="row">
            <div class="col-6">
                <div class="card shadow-sm">
                    <div class="card-body project">
                        <h5 class="text-white">
                            <img src="{{ asset('images/project.svg') }}" alt="" height="30px" width="30px">
                            Total Project</h5>
                        <h2 class="counters text-white" data-count="300">0</h2>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card shadow-sm">
                    <div class="card-body service">
                        <h5 class="text-white">
                            <img src="{{ asset('images/service.svg') }}" alt="" height="30px" width="30px">
                            Total Service</h5>
                        <h2 class="counters text-white" data-count="150">0</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div>
                    <h3 class="mt-5" id="education">
                        <img src="{{ asset('images/education.svg') }}" alt="" height="40px" width="40px">
                        Education</h3>
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Year</th>
                                <th>Finished</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PSC</td>
                                <td>2013</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>JSC</td>
                                <td>2016</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>SSC</td>
                                <td>2019</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Diploma In Engg</td>
                                <td>2019</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>BSC</td>
                                <td>2025</td>
                                <td>No</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6">
                <div class="ms-2">
                    <h3 class="mt-5" id="project">
                        <img src="{{ asset('images/project.svg') }}" alt="" height="40px" width="40px">
                        Project</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Project Name</th>
                                <th>Project Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('images/project1.jpg') }}" alt="" height="40px" width="40px"></td>
                                <td>Project 1</td>
                                <td>Web Development</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('images/project2.jpg') }}" alt="" height="40px" width="40px"></td>
                                <td>Project 2</td>
                                <td>Web Development</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('images/project2.jpg') }}" alt="" height="40px" width="40px"></td>
                                <td>Project 3</td>
                                <td>Web Development</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('images/project2.jpg') }}" alt="" height="40px" width="40px"></td>
                                <td>Project 4</td>
                                <td>Web Development</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('images/project2.jpg') }}" alt="" height="40px" width="40px"></td>
                                <td>Project 5</td>
                                <td>Web Development</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="mt-5" id="recent-project">
                    <img src="{{ asset('images/project.svg') }}" alt="" height="30px" width="30px">
                    Recent Project</h3>

            </div>
            {{-- <div class="mt-4"> --}}
                <div class="col-4 mt-4">
                    <div class="card shadow-lg rounded-lg card-recent-project" id="card-recent-project">
                        <div class="card-body text-white">
                            <img src="{{ asset('images/education.svg') }}" alt="" height="60px" width="60px">
                            <div class="d-flex justify-content-between">
                                <h5 class="mt-2">Project 1</h5>
                                <h5 class="border rounded-pill px-2 py-1">e-commerce</h5>
                            </div>
                            <p class="mt-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim non dolorum suscipit modi
                                ipsam eaque perferendis, obcaecati voluptate optio porro!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="card shadow-lg rounded-lg card-recent-project" id="card-recent-project">
                        <div class="card-body text-white">
                            <img src="{{ asset('images/education.svg') }}" alt="" height="60px" width="60px">
                            <div class="d-flex justify-content-between">
                                <h5 class="mt-2">Project 2</h5>
                                <h5 class="border rounded-pill px-2 py-1">e-commerce</h5>
                            </div>
                            <p class="mt-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim non dolorum suscipit modi
                                ipsam eaque perferendis, obcaecati voluptate optio porro!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-4">
                    <div class="card shadow-lg rounded-lg card-recent-project" id="card-recent-project">
                        <div class="card-body text-white">
                            <img src="{{ asset('images/education.svg') }}" alt="" height="60px" width="60px">
                            <div class="d-flex justify-content-between">
                                <h5 class="mt-2">Project 3</h5>
                                <h5 class="border rounded-pill px-2 py-1">e-commerce</h5>
                            </div>
                            <p class="mt-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim non dolorum suscipit modi
                                ipsam eaque perferendis, obcaecati voluptate optio porro!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
