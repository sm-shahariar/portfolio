@extends('layout.mainlayout')
@section('content')

<p class="ms-2 mt-3 dashboards">Dashboard/Skill</p>
<div class="container shadow mt-3 ms-2 p-3 bg-white rounded">
    <h3 class="skill">Skills</h3>
    <form class="mt-4" action="#" method="#">
   
        <div class="row">
                <!-- Left side inputs -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="framework" class="form-label">Framework</label>
                        <div class="d-flex flex-row">
                            <input type="text" class="form-control border border-primary" name="framework" placeholder="Enter framework" multiple>
                            <button type="button" class="add-skill bg-success text-white px-2 py-1">+</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="program" class="form-label">Programming Language</label>
                        <div class="d-flex">
                            <input type="text" class="form-control border border-primary" name="programming_language" placeholder="Enter programming language" multiple>
                            <button type="button" class="add-skill bg-success text-white px-2 py-1">+</button>
                        </div>
                    </div>
                </div>

                <!-- Right side  inputs -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="database" class="form-label">Database</label>
                        <input type="text" class="form-control border border-primary" name="database" placeholder="Enter database" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="tool" class="form-label">Tools</label>
                        <div class="d-flex flex-row"></div>
                            <input type="text" class="form-control border border-primary" name="name" placeholder="Enter tool" multiple>
                            <button type="button" class="add-skill bg-success text-white px-2 py-1">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button class="btn btn-outline-primary">Submit</button>
            </div>
    </form>
    <div class="mt-4">
        <h3 class="review">Skills Review</h3>
        <div class="row mt-4">
            <div class="col-3">
                <div class="card shadow skills" id="framework">
                    <div class="card-body">
                        <h5>Framework</h5>
                        <ul>
                            <li>Laravel</li>
                            <li>React</li>
                            <li>Bootstrap</li>
                            <li>Tailwind Css</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow skills" id="program">
                    <div class="card-body">
                        <h5>Programming Language</h5>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>C</li>
                            <li>PHP</li>
                            <li>Ajax</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow skills" id="database">
                    <div class="card-body">
                        <h5>Database</h5>
                        <ul>
                            <li>MySql</li>
                            <li>Sql Lite</li>
                            <li>MongoDB</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow skills" id="tool">
                    <div class="card-body">
                        <h5>Tools</h5>
                        <ul>
                            <li>Git Hub</li>
                            <li>Git</li>
                            <li>Laragon</li>
                            <li>PostMan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        $(document).ready(function(){
             $('#add-skill').click(function(){
                $('#skill-wrapper').append(`
                    <div class="skill-row mt-2">
                        <input type="text" name="name[]" placeholder="Enter skill">
                        <button type="button" class="remove-skill">-</button>
                    </div>
                `);
            });

            $(document).on('click', '.remove-skill', function(){
                $(this).closest('.skill-row').remove();
            });

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
            $(document).on('submit', '.deleteForm', function(e){
                e.preventDefault();
                let form = $(this);
                let formData = new FormData(this);

                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                }).done(function(response){
                    if(response.type == 'success'){
                        toastr.success(response.message);
                        setTimeout(() => {
                            location.reload();
                        }, 1500);
                    } else {
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