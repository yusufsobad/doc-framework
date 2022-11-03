<!DOCTYPE html>
<html lang="en">

<!-- Head -->
@include('Layout.header')
<!-- End Head -->

<body class="docs-page">   
    <!-- Begin page -->
    @include('Layout.nav-bar')
    <div class="docs-wrapper">
        @include('Layout.side-bar')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="docs-content">

                <!-- Start Content -->
                @include('Layout.isi')
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('Layout.footer')
            <!-- end Footer -->
    </div>
</body>

</html>
