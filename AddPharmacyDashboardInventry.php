<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/parmacyDashboardProfile.css">
    <title>Tabsule Dashboard</title>
</head>

<body>
    <nav>
        <h3>LOGO</h3>
        <h5>Tabsule</h5>
    </nav>
    <div class="navSection">
        <div class="navlinks">
            <ul>
                <li><a href="">Inventory</a></li>
                <li><a href="">Profile</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </div>
        <div class="navContent">
            <h4>Inventry/Add Drug</h4>
            <br>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>
                            <select class="drugs-drop" name="drug" id="drug">
                                <option value="Drug1">Drug 1</option>
                                <option value="Drug2">Drug 2</option>
                                <option value="Drug3">Drug 3</option>
                                <option value="Drug4">Drug 4</option>
                            </select>
                        </td>
                        <td><input type="text" placeholder="Manufacture" name="manufacturer"></td>
                    </tr>
                    <tr>
                        <td><input type="tel" placeholder="Supplier" name="supplier"></td>
                        <td><input type="email" placeholder="NDC (National Drug Cable)" name="ndc"></td>
                    </tr>
                    <tr>
                        <td><input type="date" class="inventry-data" placeholder="Select Expiration Date"
                                name="expiration"></td>
                        <td><input type="number" name="quantityonhand" placeholder="Quantity on hand" min="0"></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Unit Price" name="unitprice"></td>
                    </tr>
                </table>
                <input type="submit" value="Add Drug" class="save-btn">
            </form>
        </div>
    </div>
</body>

</html>