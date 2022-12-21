<table>
    <caption><font size="9"><b>Employees</b></font></caption>
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Phone number</th>
            <th>Address</th>
        </tr>
    </thead>

    <tbody>
    
    <?php
        $result = $system->getTableContent('employees');
        $id = 0;

        while($row = $result->fetch_assoc()){
            $id = $id + 1;
            $e_id = $row["employee_id"];
            $name = $row["employee_name"];
            $designation = $row["employee_designation"];
            $number = $row["employee_phone"];
            $address = $row["employee_address"];

            echo "<tr>
                    <td>$id</td>
                    <td>$e_id</td>
                    <td>$name</td>
                    <td>$designation</td>
                    <td>$number</td>
                    <td>$address</td>
                </tr>";
        }
    ?>
    </tbody>
</table>
