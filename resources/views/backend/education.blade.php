@extends('layout.mainlayout')
@section('content')
    <p class="ms-2 mt-3" id="dashboard">Dashboard\Education</p>

    <div class="container shadow mt-3 ms-2 p-3 bg-white rounded">
        <h3 class="education">Education & Qualification</h3>
        <form class="mt-4" id="storeForm" action="{{ route('educations.store') }}" method="POST">
            @csrf
            <div class="row">
                <!-- Left side inputs -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="input1" class="form-label">Degree Name</label>
                        <input type="text" class="form-control border border-success" name="degree" id="input1" placeholder="Enter degree">
                    </div>
                    <div class="mb-3">
                        <label for="input2" class="form-label">Institute Name</label>
                        <input type="text" class="form-control border border-success" name="university" id="input2" placeholder="Enter institute">
                    </div>

                </div>

                <!-- Right side  inputs -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="input3" class="form-label">Passing Year</label>
                        <input type="text" class="form-control border border-success" name="year" id="input3" placeholder="Enter year">
                    </div>
                    <div class="mb-3">
                        <label for="input4" class="form-label">Is Passing</label>
                        <input type="text" class="form-control border border-success" name="is_true" id="input4" placeholder="Enter value">
                    </div>
                </div>
            </div>

            <div class="text-end mt-3">
                <button type="submit" class="btn btn-outline-primary rounded-lg" id="submit_btn">Submit</button>
            </div>
        </form>
        <div class="row">
            <div class="col-12">
                <h3 class="edu-title">Education</h3>
                <table class="table table-bordered mt-3 text-center" id="edu-table">
                    <thead>
                        <tr>
                            <th>Degree Name</th>
                            <th>Institute Name</th>
                            <th>Passing Year</th>
                            <th>Is Passing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PSC</td>
                            <td>Gajaghanta Govt Primary School</td>
                            <td>2013</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>JSC</td>
                            <td>Gajaghanta High School & College</td>
                            <td>2016</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>SSC</td>
                            <td>Gajaghanta High School & College</td>
                            <td>2019</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Diploma Engineering</td>
                            <td>Rangpur Polytechnic Institute</td>
                            <td>2024</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>BSC</td>
                            <td>Bangladesh University Of Business & Technology</td>
                            <td>-</td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
        });
    </script>
@endpush
