@extends('layout.mainlayout')
@section('content')

<p class="dashboards ms-2 mt-3">Dashboard/Service</p>
<div class="container shadow mt-3 ms-2 p-3 bg-white rounded">
    <h3 class="services">Service</h3>
    <form class="mt-4" action="#" method="#">
        <div class="mb-3">
            <label for="serviceName" class="form-label">Service Name</label>
            <input type="text" class="form-control border border-primary" name="service_name" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="serviceDescription" class="form-label">Service Description</label>
            <textarea class="form-control border border-primary" name="service_description" id="description" rows="5" cols="3"></textarea>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
    <div class="mt-5">
        <h3 class="review">Services</h3>
        <div class="row mt-4">
            <div class="col-3">
                <div class="card shadow rounded" id="service1">
                    <div class="card-body">
                        <h5>Frontend Design</h5>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, iste quaerat! Ipsum, itaque?</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow rounded" id="service2">
                    <div class="card-body">
                        <h5>Frontend Development</h5>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, iste quaerat! Ipsum, itaque?</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow rounded" id="service3">
                    <div class="card-body">
                        <h5>Backend Development</h5>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, iste quaerat! Ipsum, itaque?</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow rounded" id="service4">
                    <div class="card-body">
                        <h5>API Testing</h5>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, iste quaerat! Ipsum, itaque?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
