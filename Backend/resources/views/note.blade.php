@if(Session::has('error'))
<p class = "alert alert-danger" > {{Session::get('error')}}</p>
@endif
@if(Session::has('del'))
<p class = "alert alert-danger" > {{Session::get('del')}}</p>
@endif
@if(Session::has('upd'))
<p class = "alert alert-success" > {{Session::get('upd')}}</p>
@endif