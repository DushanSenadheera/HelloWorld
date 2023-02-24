<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Phamacy Dashboard inventory.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <h3>LOGO</h3>
        <h5>Parmacy Name</h5>
    </nav>
    <div class="navSection">
        <div class="navlinks">
            <ul>
                <li><a href="">Inventory</a></li>
                <li><a href="">Profile</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>
        <div class="booking">
            <div class="booking-details">
                <h2>Inventory</h2>
                <button class="adddrug">Add New Drug</button>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Pharmacy name</th>
                        <th>Pharmacy email</th>
                        <th>Owner name</th>
                        <th>Verification Status</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $id ?>
                        </td>
                        <td>
                            <?php echo $manufacturer ?>
                        </td>
                        <td>
                            <?php echo $supplier ?>
                        </td>
                        <td>
                            <?php echo $ndc ?>
                        </td>
                        <td>
                            <?php echo $expiration ?>
                        </td>
                        <td>
                            <?php echo $quantityonhand ?>
                        </td>
                        <td>
                            <?php echo $unitprice ?>
                        </td>
                        <td>
                            <button class="button 1">Edit</button>
                            <button class="button 2">Delete</button>
                        </td>
                    </tr>

                </table>
            </div>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#" class="active">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>

        </div>

    </div>
</body>

</html>