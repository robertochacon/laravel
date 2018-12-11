<form method="POST" action="Post" enctype="multipart/form-data">
  @csrf
<div class="modal fade" tabindex="-1" id="create" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Title</label>
            <div class="col-10">
              <input class="form-control" type="text" name="title" id="example-text-input">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleTextarea">Description</label>
            <textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
          </div>
          <div class="form-group row">
            <label for="example-text-avatar" class="col-2 col-form-label">Title</label>
            <div class="col-10">
              <input type="file" name="avatar" id="example-avatar">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
</form>