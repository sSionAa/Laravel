<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <div class="add-users_form-wrapper">
        <form name="newuser" id="add-new-user" method="post" action="{{ Route('show_user') }}">
            <div class="form-section">
                <label for="name"> Name </label>
                <input type="text" id="name" name="name" class="form-control" value=@if($user) {{$user->name}}
                @endif required><br>
            </div>
            <div class="form-section">
                <label for="surname"> Surname </label>
                <input type="text" id="surname" name="surname" class="Form-control" value=@if($user) {{$user->surname}} 
                @endif required><br>
            </div>
            <div class="form-section">
                <label for="email"> Email </label>
                <input type="text" id="email" name="email" class="Form-control" value=@if($user) {{$user->email}} 
                @endif required><br>
            </div>
            <button type="submit" class="btn btn-prinary">Submit</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
</body>

</html>