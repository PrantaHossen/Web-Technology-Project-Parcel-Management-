<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Parcel</title>
</head>

<body>
    <form method="POST" action="../controller/parcelmanagementcheck.php">
        <table border="1" cellspacing="0" cellpadding="5" align="center" width="600px" height="400px">
            <tr>
                <td colspan="3" align="center">
                    <b>Parcel Management System</b>
                </td>
            </tr>
            <tr>
                <td width="150px">
                    <a href="addparcell.php">Add Parcel</a>
                </td>
                <td rowspan="3">
                    <table border="1" cellspacing="0" cellpadding="8" align="center">
                        <tr>
                            <td colspan="2" align="center"><b>Add Parcel
                            </td>
                        </tr>
                        <tr>
                            <td colspan="">
                                Parcel name:
                            </td>
                            <td colspan="2">
                                <input type="text" name="percelName" id="">
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Select Your<br>
                                Percel Type
                            </td>
                            <td>
                                <select name="percelType" id="">
                                    <option value="low">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                Select your parcel
                                sending area.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Parcel-From
                            </td>
                            <td>
                                <Select name="parcelFrom" id="">
                                    <option value="DHAKA">DHAKA</option>
                                    <option value="CHITTAGONG">CHITTAGONG</option>
                                    <option value="RAJSHAHI">RAJSHAHI</option>
                                    <option value="KHULNA">KHULNA</option>
                                    <option value="BARISHAL">BARISHAL</option>
                                    <option value="SYLHET">SYLHET</option>
                                    <option value="RANGPUR">RANGPUR</option>
                                    <option value="MYMANSINGH">MYMANSINGH</option>
                                </Select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Parcel-To
                            </td>
                            <td>
                                <Select name="parcelTo" id="">
                                    <option value="DHAKA">DHAKA</option>
                                    <option value="CHITTAGONG">CHITTAGONG</option>
                                    <option value="RAJSHAHI">RAJSHAHI</option>
                                    <option value="KHULNA">KHULNA</option>
                                    <option value="BARISHAL">BARISHAL</option>
                                    <option value="SYLHET">SYLHET</option>
                                    <option value="RANGPUR">RANGPUR</option>
                                    <option value="MYMANSINGH">MYMANSING</option>
                                </Select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Receiver Name
                            </td>
                            <td>
                                <input type="text" name="rname" id="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Receiver Number
                            </td>
                            <td>
                                <input type="number" name="rnumber" id="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                            <input type="submit" name="submit" id="" align="center">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="deleteparcel.php">Delete Parcel</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="oderhistory.php">View Parcel History</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <a href="percelmgt.php">Back to Home!?</a>
                </td>
            </tr>

        </table>
      <!--   <input type="submit" name="submit" id="" align="center"> -->
    </form>
</body>

</html>