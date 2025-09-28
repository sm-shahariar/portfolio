<form class="mt-4 editForm" action="{{ route('services.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="serviceName" class="form-label">Service Name</label>
        <input type="text" class="form-control border border-primary" 
            value="{{ $service->service_name }}" name="service_name" placeholder="Enter name">
    </div>
    
    <div class="mb-3">
        <label for="serviceDescription" class="form-label">Service Description</label>
        <textarea class="form-control border border-primary" 
           name="service_description" id="description" rows="5" cols="3">{{ $service->service_description }}</textarea>
    </div>
    <div class="text-end">
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </div>
</form>