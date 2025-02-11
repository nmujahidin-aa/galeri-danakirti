<script>var hostUrl = "assets/";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{URL::to('/')}}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{URL::to('/')}}/assets/js/scripts.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{URL::to('/')}}/assets/js/custom/widgets.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->

@yield('script')
