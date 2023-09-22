

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
   
    <style>
        
        body {
            background-color: #f5f5f5; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }

        .container {
            width: 400px; 
            padding: 30px 20px; 
            border-radius: 5px; 
            background-color: #ffffff; 
            box-shadow: 0px 0px 10px #888888; 
        }

        h1 {
            color: #333333; 
            text-align: center; 
            font-size: 30px; 
            font-weight: bold; 
        }

        
        .form-control {
            background-color: #f2f2f2; 
            border: 1px solid #dddddd; 
            color: #333333; 
        }

        
        .btn-primary {
            background-color: #333333; 
            border: 1px solid #333333; 
            color: #ffffff; 
        }

       
        label {
            color: #333333; 
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
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>

        <form action="/products/store" method="post">
            <div class="form-group">
                <label for="Product_Name">Product Name:</label>
                <input type="text" class="form-control" name="Product_Name" id="Product_Name" required>
            </div>

            <div class="form-group">
                <label for="Product_Description">Product Description:</label>
                <textarea class="form-control" name="Product_Description" id="Product_Description" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="Product_Quantity">Quantity:</label>
                <input type="number" class="form-control" name="Product_Quantity" id="Product_Quantity" required>
            </div>

            <div class="form-group">
                <label for="Product_Price">Price:</label>
                <input type="text" class="form-control" name="Product_Price" id="Product_Price" required>
            </div>

            <div class="form-group">
                <label for="category_health">Category:</label>
                <select class="form-control" name="category_health" id="category_health" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="neomorphic-btn btn btn-primary">Create Product</button>
        </form>
    </div>
</body>
</html>
