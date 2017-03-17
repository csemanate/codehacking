@if(Session::has('deleted_user'))
    <p class="bg-danger">{{session('deleted_user')}}</p>
@elseif(Session::has('$flash_type_create'))
    <p class="bg-success">{{session('$flash_message_create')}}</p>
@elseif(Session::has('updated_user'))
    <p class="bg-success">{{session('updated_user')}}</p>
@endif