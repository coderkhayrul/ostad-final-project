<div class="modal fade" id="jobTypeEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="jobTypeEditModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobTypeEditModalTitle">Job type Edit </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="jobTypeName" name="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" id="name"
                            placeholder="Enter Type Name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea id="jobTypeRemarks" name="remarks" class="form-control @error('remarks') is-invalid @enderror" id="remarks"
                            rows="3" placeholder="Enter Remarks"></textarea>
                        @error('remarks')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"> <i class="bx bx-sync"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
