<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    
    <style>
        .text {
            font-size: 30px;
        }
        .sidebar {
            position: fixed;
            height: auto;
        }
    </style>
</head>
<body>
<div class="d-flex min-vh-100">
<!-- slidebar -->
<div class="d-flex flex-column flex-shrink-0 p-3 text-white " style="width: 280px;background-color:rgb(252,188,56);">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="text" >ADMIN</span>
    </a>
    <hr style="border:1px solid black">
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="/doAn/admin/product/index.php" class="nav-link active text-black" style="background-color:#FFFF00;">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Product Management
        </a>
      </li>
      <li>
        <a href="../../admin/all_orders/manager_orders_customer.php" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Order management
        </a>
      </li>
      <li>
        <a href="../../admin/chart/chart_money.php" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Revenue statistics
        </a>
      </li>
      <li>
        <a href="../../customer/home/home.php" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Customer page
        </a>
      </li>
      
      <li>
        <a href="../../admin/login_logout/logout.php" class="nav-link text-black">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Log out
        </a>
      </li>
    </ul>
    
   </div>
<!-- CONTENT -->
<div class="container">
    <h1 style="text-align:center;">Add new products</h1>
    <form method='POST' action="create_process.php" enctype="multipart/form-data">
        <input class="form-control mt-2 " name='product_code' placeholder="Enter product code" required>
        <input class="form-control mt-2" name='name' placeholder="Enter the product name" required> 
        <input type="number" step="1" class="form-control mt-2" name='price' placeholder="Enter product price" required>
        <input type="file" class="form-control mt-2" name='image' placeholder="Select image" required>  
        <input class="form-control mt-2" name='themes' placeholder="Themes" required>
        <div class="form-floating mt-2">
                <textarea name="description" class="form-control" placeholder="Leave a comment here"
                    id="editor"></textarea>
         </div>
        <button type="submit" class="btn btn-primary  mt-2">Add products</button>
    </form>
</div>
</div>
<script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
</html>