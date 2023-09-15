<!DOCTYPE html>
<html lang="en-US" itemscope itemtype="http://schema.org/WebPage">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- BEGIN: Head-->
@include('layouts.css.master')
<!-- END: Head-->

<!-- BEGIN: Body-->

<!-- BEGIN: Content-->
@yield('content')
<!-- END: Content-->

@stack('js')

</html>