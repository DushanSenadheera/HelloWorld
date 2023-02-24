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
            <h3>Parmacy Information</h3>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><input type="text" placeholder="Parmacy Name"></td>
                        <td><input type="text" placeholder="Address"></td>
                    </tr>
                    <tr>
                        <td><input type="tel" placeholder="Phone Number"></td>
                        <td><input type="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Website"></td>
                        <td><input type="text" placeholder="Opening Hours"></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Parmacy Lisence"></td>
                    </tr>
                </table>
                <br>
                <h3>Owner Information</h3>
                <table>
                    <tr>
                        <td><input type="text" placeholder="Name"></td>
                        <td><input type="text" placeholder="Address"></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Phone"></td>
                        <td><input type="text" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="NIC"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Save" class="save-btn">
            </form>
        </div>
    </div>
</body>

</html>