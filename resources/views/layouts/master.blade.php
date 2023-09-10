<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
@include('layouts.css.master')
<!-- END: Head-->

<!-- BEGIN: Body-->

@auth()
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endauth
<!-- BEGIN: Content-->
@yield('content')
<!-- END: Content-->
@include('layouts.js.master')
@stack('js')

</html>