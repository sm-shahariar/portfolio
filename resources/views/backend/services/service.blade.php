@extends('layout.mainlayout')
@section('content')

<p class="dashboards ms-2 mt-3">
    <a href="#" class="text-decoration-none" style="color: black !important;">Dashboard/</a>
    <a href="{{ route('services.index') }}" class="text-decoration-none" style="color: black !important;">Service</a>
</p>
<div class="container shadow mt-3 ms-2 p-3 bg-white rounded">
    <h3 class="services">Service</h3>
    @if(Request::routeIs('services.create','services.index'))
        <form class="mt-4" id="storeForm" action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="serviceName" class="form-label">Service Name</label>
                <input type="text" class="form-control border border-primary" name="service_name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="serviceDescription" class="form-label">Service Description</label>
                <textarea class="form-control border border-primary" name="service_description" id="description" rows="5" cols="3"></textarea>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-outline-primary" id="submit_btn">Submit</button>
            </div>
        </form>
        <div class="mt-5">
            <h3 class="review">Services</h3>
            <div class="row mt-4">
                @forelse($services as $service)
                    <div class="col-3">
                        <div class="card shadow rounded service_card" id="service1">
                            <div class="card-body">
                                <h5>{{ $service->service_name }}</h5>
                                <p class="mt-4">{{ $service->service_description }}</p>
                                <a class="btn d-flex justify-content-end" 
                                    href="{{ route('services.edit', $service->id) }}">
                                    <img src="{{ asset('images/edit.svg') }}" alt="" height="20px" width="20px">
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h5 class="text-center text-black">No data found</h5>
                @endforelse
                {{-- <div class="col-3">
                    <div class="card shadow rounded service_card" id="service2">
                        <div class="card-body">
                            <h5>Frontend Development</h5>
                            <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, iste quaerat! Ipsum, itaque?</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow rounded service_card" id="service3">
                        <div class="card-body">
                            <h5>Backend Development</h5>
                            <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, iste quaerat! Ipsum, itaque?</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow rounded service_card" id="service4">
                        <div class="card-body">
                            <h5>API Testing</h5>
                            <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, iste quaerat! Ipsum, itaque?</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    @elseif (Request::routeIs('services.edit'))
        @include('backend.services.edit')
    @endif
</div>

@endsection

@push('script')
    <script>
        $(document).ready(function(){
            $('#storeForm').submit(function(e){
                e.preventDefault();
                let SubmitButton = $('#submit_btn');
                let formData = new FormData(this);

                $.ajax({
                    type:$(this).attr('method'),
                    url:$(this).attr('action'),
                    data:formData,
                    cache:false,
                    contentType:false,
                    processData:false,
                }).done(function(response){
                    if(response.type == 'success'){
                        toastr.success(response.message);

                        setTimeout(() => {
                            location.reload();
                        }, 3000);

                    }else{
                        toastr.error(response.message);
                    }
                }).fail(function(xhr){
                    let response = xhr.responseJSON;
                    if(response && response.errors){
                        $.each(response.errors,function(key,value){
                            toastr.error(value);
                        })
                    }
                });
            });
            $(document).on('submit', '.editForm', function(e){
                e.preventDefault();
                let form = $(this);
                let formData = new FormData(this);

                $.ajax({
                    type:form.attr('method'),
                    url:form.attr('action'),
                    data:formData,
                    cache:false,
                    contentType:false,
                    processData:false,
                }).done(function(response){
                    if(response.type == 'success'){
                        toastr.success(response.message);

                        setTimeout(() => {
                            window.location.href = "{{ route('services.index') }}";
                        }, 3000);

                    }else{
                        toastr.error(response.message);
                    }
                }).fail(function(xhr){
                    let response = xhr.responseJSON;
                    if(response && response.errors){
                        $.each(response.errors,function(key,value){
                            toastr.error(value);
                        })
                    }
                });
            });
        });
    </script>
@endpush