
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        
        body {
            background-color: #f5f5f5; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            width: 400px;
            margin-left: 500px; 
        }

        h1 {
            color: #333333; 
            text-align: center; 
            font-size: 30px; 
            font-weight: bold; 
        }

        .btn-primary {
            background-color: #333333; 
            border: 1px solid #333333; 
            color: #ffffff; 
            margin-left: 100px;
        }

        
        .list-group-item {
            background-color: #f5f5f5; 
            border: 1px solid #dddddd; 
            border-radius: 2px; 
            padding: 0; 
        }

       
        .list-group-item a {
            display: block;
            padding: 10px 20px; 
            text-align: center; 
            text-decoration: none; 
            color: #333333; 
            transition: background-color 0.2s ease; 
        }

       
        .list-group-item a:hover {
            background-color: #dddddd; 
            color: #000000; 
        }

        
        .neomorphic-btn {
            background-color: #f5f5f5; 
            border: 1px solid #dddddd; 
            border-radius: 2px; 
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2), -2px -2px 4px rgba(255, 255, 255, 0.5); 
            color: #333333; 
            padding: 10px 20px; 
            font-weight: bold;
            transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease; 
        }

        
        .neomorphic-btn:hover {
            transform: scale(1.05);
            background-color: #dddddd;
            color: #000000; 
        }

       
        .neomorphic-btn:active {
            background-color: #333333; 
            box-shadow: inset 2px 2px 4px rgba(0, 0, 0, 0.2), inset -2px -2px 4px rgba(255, 255, 255, 0.5); 
            color: #ffffff; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>

        <a href="/products/create" class="neomorphic-btn btn btn-primary">Add New Product</a>

        <ul class="list-group">
            <?php foreach ($products as $product): ?>
                <li class="list-group-item">
                    <a href="/products/edit/<?= $product['Product_ID'] ?>">
                        <span><?= $product['Product_Name'] ?></span>
                    </a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</body>
</html>
