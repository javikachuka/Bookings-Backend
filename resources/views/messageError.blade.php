@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if ($message = Session::get('success'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">×</button>
    <ul>
        <li>{{ $message }}</li>
    </ul>
</div>

@endif
@if ($message = Session::get('warning'))

<div class="alert alert-warning">

    <button type="button" class="close" data-dismiss="alert">×</button>
    <ul>
        <li>{{ $message }}</li>
    </ul>


</div>

@endif