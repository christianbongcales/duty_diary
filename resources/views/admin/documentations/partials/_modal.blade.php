<!-- Modal -->
<div class="modal fade" id="newDocumentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">


          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Documentations</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('documentations.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body rounded-3">
                <input type="file" class="dropify" name="doc_img" id="doc-img" data-max-file-size="5M" data-show-errors="true" data-max-file-size-preview="2M">
                <div>
                <input type="text" class="form-control col-12 mt-2" name="caption" value="{{ old('caption') }}" placeholder="Write your caption here.">
                </div>
              </div>

          {{-- <div class="modal-body">
            <input type="file" class="dropify" name="doc_img" id="doc_img">
            <input type="text" class="form-control col-12 mt-2" name="caption" value="{{ old('caption') }}">
          </div> --}}
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
            <input type="submit" value="Save"  id="doc-img" class="btn btn-primary btn-sm">
          </div>
        </form>
      </div>
    </div>
  </div>
