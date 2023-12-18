

@extends('layouts.navigation')
{{-- <script>
    if(!localStorage.hasOwnProperty('token')){
       window.location.replace('/home')
    }
</script> --}}

@section('content')
<dashboardindex-component></dashboardindex-component>
@endsection



{{-- <script>
    window.auth_user = {!! json_encode($auth_user); !!};
    alert(window.auth_user)
</script> --}}

{{-- < ?php
$user = Auth::user();
echo $user->email
?> --}}