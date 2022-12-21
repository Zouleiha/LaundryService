<table>
    <caption><font size="9"><b>Customers</b></font></caption>
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
        </tr>
    </thead>

    <tbody>
    
    <?php
        $result = $system->getTableContent('customers');
        $id = 0;

        while($row = $result->fetch_assoc()){
            $id = $id + 1;
            $c_id = $row["customer_id"];
            $name = $row["customer_name"];
            $email = $row["customer_email"];
            $number = $row["customer_phone"];
            $address = $row["customer_address"];

            echo "<a href=\"customerDetails.php?customerID=$c_id\"><tr>
                    <td>$id</td>
                    <td>$c_id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$number</td>
                    <td>$address</td>
                </tr></a>";
        }
    ?>
    </tbody>
</table>
