<form action="{{url('/foders/delete/'.$showFoder->id)}}" method="post">
@csrf

  <div class="modal fade" id="foderModal{{$showFoder->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ __('Delete')}}<i class="fa fa-trash  mydelete"></i></h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body"><h5 class="text-secondary">Are you sure to delete this items?</h5></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">{{ __('No')}}</button>
          <button type="submit" class="btn btn-danger">{{ __('Yes')}}</button>
        </div>
      </div>
    </div>
  </div>
</form>
