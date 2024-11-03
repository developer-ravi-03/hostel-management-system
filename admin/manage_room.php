<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/f8378f7fb1.js" crossorigin="anonymous"></script>
    <title>Manage - Room</title>
    <link rel="stylesheet" href="./stylesheet.css"/>
</head>
<body>
    <?php include("./navigation.php"); ?>
    <div class="dashboard_container">
        <div class="dashoard_name">
            <h1><font size="20px">HOSTEL MANAGEMENT SYSTEM</font></h1>
        </div>
        <div class="approval_name">
            <h1><u>Manage Room</u></h1>
        </div>
        <div class="edit_2">
            <div class="room_no">
                <label class="room_no_1">Enter room No:</label>
                <input type="number" name="room_no" placeholder="Room No." required>
            </div>
            <div class="hostel_no">
                <label class="hostel_no_1">Choose hostel:</label>
                    <select name="hostel_no_1" required>
                        <option value="" >Not Selected</option>
                        <option value="Hostel_No_1">Hostel No 1</option>
                        <option value="Hostel_No_2">Hostel No 2</option>
                        <option value="Hostel_No_3">Hostel No 3</option>
                    </select>
            </div>
            <div class="room_type">
                <label class="room_type_1">Choose Room Type:</label>
                    <select name="room_type_1" required>
                        <option value="" >Not Selected</option>
                        <option value="Single" >Single</option>
                        <option value="Double">Double</option>
                        <option value="Tripple">Tripple</option>
                    </select>
            </div>
            <button class="add_room">Add Room <i class="fa-regular fa-plus"></i></button>
        </div>
        <table class="table_2" border="1px">
            <tr>
                <th>Room No.</th>
                <th>Room Type</th>
                <th>Hostel no.</th>
                <th>Status</th>
                <th>Edit Room</th>
                <th>Delete Room</th>
            </tr>
            <tr>
                <td>1</td>
                <td>single</td>
                <td>Hostel No 1</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>2</td>
                <td>double</td>
                <td>Hostel No 2</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>3</td>
                <td>tripple</td>
                <td>Hostel No 3</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>4</td>
                <td>single</td>
                <td>Hostel No 1</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>5</td>
                <td>double</td>
                <td>Hostel No 2</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>6</td>
                <td>tripple</td>
                <td>Hostel No 3</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>7</td>
                <td>single</td>
                <td>Hostel No 1</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>8</td>
                <td>double</td>
                <td>Hostel No 2</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>9</td>
                <td>tripple</td>
                <td>Hostel No 3</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>10</td>
                <td>single</td>
                <td>Hostel No 1</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>11</td>
                <td>double</td>
                <td>Hostel No 2</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>12</td>
                <td>tripple</td>
                <td>Hostel No 3</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>13</td>
                <td>single</td>
                <td>Hostel No 1</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>14</td>
                <td>double</td>
                <td>Hostel No 2</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>15</td>
                <td>tripple</td>
                <td>Hostel No 3</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>16</td>
                <td>single</td>
                <td>Hostel No 1</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>17</td>
                <td>double</td>
                <td>Hostel No 2</td>
                <td>Vacant</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
            <tr>
                <td>18</td>
                <td>tripple</td>
                <td>Hostel No 3</td>
                <td>Alloted</td>
                <th><button class="edit_1">Edit &nbsp;<i class="fa-regular fa-pen-to-square"></i></button></th>
                <th><button class="delete_1">Delete&nbsp;<i class="fa-solid fa-trash"></i></button></th>
            </tr>
        </table>
    </div>
    <!--footer area start-->
    <?php include("./footer.php"); ?>
    <!--footer area end-->
</body>
</html>