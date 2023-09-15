<!DOCTYPE html>
<html lang="en-US" itemscope itemtype="http://schema.org/WebPage">
<!-- BEGIN: Head-->
@include('layouts.css.master')
<!-- END: Head-->

<!-- BEGIN: Body-->

<!-- BEGIN: Content-->
@yield('content')
<!-- END: Content-->

@include('layouts.js.master')

@stack('js')

</html>