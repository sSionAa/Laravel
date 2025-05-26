<form name="employee-form" id="employee-form" method="POST" action="{{url('/store_form')}}">
    @csrf
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" id="id" name="id" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Description</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="workData">workData</label>
        <textarea id="workData" name="workData" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<form name="empl" id="empl" method="GET">
    @csrf
    <div class="form-group">
        <label for="workData2">workData</label>
        <textarea id="workData2" name="workData2" class="form-control">
        {{ $data2}}
        </textarea>
    </div>
</form>