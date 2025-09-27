@extends('layout.mainlayout')
@section('content')

<p class="ms-2 mt-3 dashboards">Dashboard/Skill</p>
<div class="container shadow mt-3 ms-2 p-3 bg-white rounded">
    <h3 class="skill">Skills</h3>
    <form class="mt-4" action="#" method="#">
        {{-- <div class="row">
            <div class="col-6">
                <div>
                    <label for="framework" class="from-label">Framework</label>
                    <input type="text" class="form-control border border-primary" name="framework" multiple>
                </div>
                <div class="mt-2">
                    <label for="program" class="form-label">Programming Language</label>
                    <input type="text" class="form-control border border-primary" name="programming_language" multiple>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <label for="database" class="form-label">Database</label>
                    <input type="text" class="form-control border border-primary" name="database" multiple>
                </div>
                <div class="mt-2">
                    <label for="tool" class="form-label">Tools</label>
                    <input type="text" class="form-control border border-primary" name="tool" multiple>
                </div>
            </div>
        </div> --}}
        <div class="row">
                <!-- Left side inputs -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="framework" class="form-label">Framework</label>
                        <input type="text" class="form-control border border-primary" name="framework" placeholder="Enter framework" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="program" class="form-label">Programming Language</label>
                        <input type="text" class="form-control border border-primary" name="programming_language" placeholder="Enter programming language" multiple>
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
                        <input type="text" class="form-control border border-primary" name="tool" placeholder="Enter tool" multiple>
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
                <div class="card shadow" id="framework">
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
                <div class="card shadow" id="program">
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
                <div class="card shadow" id="database">
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
                <div class="card shadow" id="tool">
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


@endpush
