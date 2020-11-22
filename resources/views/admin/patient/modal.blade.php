<div class="modal fade" id="exampleModal{{$patient->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Doctor information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><img src="{{asset('images')}}/{{'4MPnOUgn92WdyWJwuiX9FaZFOKD6iuI5qBubxYzc.jpeg'}}" class="table-user-thumb" alt="" width="200"></p>
                <p>Name:{{$patient->name}}</p>
                <p>Address:{{$patient->address}}</p>
                <p>Phone number:{{$patient->phone_number}}</p>
                <p>Symptoms :{{$patient->symptoms}}</p>
                <p>health Status:{{$patient->health_condition}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
