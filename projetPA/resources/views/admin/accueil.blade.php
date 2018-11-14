@include('admin.header')
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    
    <!-- Top Bar -->
    
    @include('admin.navbar')
    <!-- #Top Bar -->

    <!-- sidebar -->
    @include('admin.sidebar')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>        
        </div>
    </section>
  @include('admin.script')