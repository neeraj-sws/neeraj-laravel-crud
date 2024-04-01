<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .form-group{
        margin-bottom:15px;
    }
</style>
<body>
    
<div class="container">
<div class="col-lg-12 margin-tb d-flex justify-content-between py-3 border-bottom align-items-center">
            <div class="pull-left">
                <h2 class="mb-0">Laravel Test</h2>
            </div>
            <div class="pull-right">
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ url('/users') }}" class="font-semibold  text-decoration-none text-dark dark:text-gray-400 dark:hover:text-white px-3 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Users</a>
                   
                <a href="{{ url('/products') }}" class="font-semibold  text-decoration-none text-dark hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Products</a>
                       

                     
                   
                </div>
            </div>
        </div>

    @yield('content')
</div>
    
</body>
</html>