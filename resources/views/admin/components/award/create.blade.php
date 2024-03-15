 @extends('admin.layouts.app')
 @section('title', 'experience Manage')
 @section('content')
     <div class="row .row d-flex justify-content-center">
         <div class="col-md-8 col-sm-12">
             <div class="card">
                 <div class="card-header d-flex justify-content-between">
                     <h3>Create A experience</h3>
                 </div>
                 <div class="card-body">
                     <form method="POST" action="{{ route('admin.experience.store') }}">
                         @csrf
                         <div class="mb-3">
                             <label for="title" class="form-label">Title</label>
                             <input name="title" type="text" class="form-control" id="title"
                                 placeholder="Enter Type title">
                         </div>
                         <div class="mb-3">
                             <label for="institute" class="form-label">Institute</label>
                             <textarea name="institute" class="form-control" id="institute" rows="3" placeholder="Enter institute"></textarea>
                         </div>
                         <div class="mb-3">
                             <label for="start_date" class="form-label">start_date</label>
                             <textarea name="start_date" class="form-control" id="start_date" rows="3" placeholder="Enter start_date"></textarea>
                         </div>
                         <div class="mb-3">
                             <label for="end_date" class="form-label">end_date</label>
                             <textarea name="end_date" class="form-control" id="end_date" rows="3" placeholder="Enter end_date"></textarea>
                         </div>
                         <div class="mb-3">
                             <label for="description" class="form-label">description</label>
                             <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
                         </div>
                         <button type="submit" class="btn btn-primary w-md">Submit</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>


 @endsection
