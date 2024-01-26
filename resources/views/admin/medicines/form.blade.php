@if (!empty($getRecord))
    
    <form  method="POST" action="{{ url('admin/medicines/edit/'. $getRecord->id) }}" enctype="multipart/form-data">

@else

    <form  method="POST" action="{{ url('admin/medicines/add') }}" enctype="multipart/form-data">

@endif


    {{ csrf_field() }}

    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label"> Medicine name <span style="color:red;"> *</span> </label>
        <div class="col-sm-10">
            <input type="text"  name="name" class="form-control" required  value="{{old('name', !empty($getRecord) ? $getRecord->name : '') }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label"> Packing <span style="color:red;"> *</span> </label>
        <div class="col-sm-10">
            <input type="text" name="packing" class="form-control" required  value="{{ old('packing', !empty($getRecord) ? $getRecord->packing : '' ) }}">
        </div>
    </div>


    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label"> Generic name <span style="color:red;"> *</span> </label>
        <div class="col-sm-10">
            <input type="text" name="generic_name" class="form-control" required  value="{{old('generic_name', !empty($getRecord) ? $getRecord->generic_name : '') }}">
        </div>
    </div>


    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label"> Supplier name <span style="color:red;"> *</span> </label>
        <div class="col-sm-10">
            <input type="text" name="supplier_name" class="form-control" required  value="{{old('supplier_name', !empty($getRecord) ? $getRecord->supplier_name : '') }}">
        </div>
    </div>

    
    <div class="row mb-3">
        <label for="" class="col-sm-2 col-form-label">  </label>
        <div class="col-sm-10">

            @if(!empty($getRecord))
                <button type="submit" class="btn btn-primary">Update</button>              
            @else
                <button type="submit" class="btn btn-primary">Add</button>
            @endif

        </div>
    </div>

</form>