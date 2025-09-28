<form class="mt-4 editForm" action="{{ route('educations.update', $education->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <!-- Left side inputs -->
        <div class="col-md-6">
            <div class="mb-3">
                <label for="input1" class="form-label">Degree Name</label>
                <input type="text" class="form-control border border-success"
                 value="{{ $education->degree }}" name="degree" id="input1" placeholder="Enter degree">
            </div>
            <div class="mb-3">
                <label for="input2" class="form-label">Institute Name</label>
                <input type="text" class="form-control border border-success"
                 value="{{ $education->university }}" name="university" id="input2" placeholder="Enter institute">
            </div>
        </div>

        <!-- Right side  inputs -->
        <div class="col-md-6">
            <div class="mb-3">
                <label for="input3" class="form-label">Passing Year</label>
                <input type="text" class="form-control border border-success" 
                 value="{{ $education->year }}" name="year" id="input3" placeholder="Enter year">
            </div>
            <div class="mb-3">
                <label for="input4" class="form-label">Is Passing</label>
                <input type="text" class="form-control border border-success" 
                 value="{{ $education->is_true}}" 
                 name="is_true" id="input4" placeholder="Enter value">
            </div>
        </div>
    </div>

    <div class="text-end mt-3">
        <button type="submit" class="btn btn-outline-primary rounded-lg">Submit</button>
    </div>
</form>