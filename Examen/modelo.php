<?php
function connect() {
    $ENV = "dev";
    if ($ENV == "dev") {
        $mysql = mysqli_connect("127.0.0.1","Linetes","cesarb13","lab14", 8889);
    } else  if ($ENV == "prod"){
        $mysql = mysqli_connect("localhost","marcelo","marcelomarcelo","tienda");
    }
    $mysql->set_charset("utf8");
    return $mysql;
}


function disconnect($mysql) {
    mysqli_close($mysql);
}

function login($user, $passwd) {
    $db = connect();
    if ($db != NULL) {

        //Specification of the SQL query
        $query='SELECT nombre FROM usuarios WHERE nombre="'.$user.
            '" AND passwd="'.$passwd.'"';
        $query;
        // Query execution; returns identifier of the result group
        $results = $db->query($query);
        // cycle to explode every line of the results

        if (mysqli_num_rows($results) > 0)  {
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }
    return false;
}

function getFruits() {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT * FROM Fruit";
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $html .= '<tr class=\'\'>
                          <td> '. $row["name"] .' </td>
                          <td> '. $row["units"] .' </td>
                          <td> '. $row["quantity"] .' </td>
                          <td> '. $row["price"] .' </td>
                          <td> '. $row["country"] .' </td>
                          </tr>';
            }
            echo $html;
        }
    }
}

function getFruitsByName($fruit_name) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT * FROM Fruit WHERE name LIKE '%".$fruit_name."%'";
        $result = mysqli_query($db,$sql);
        disconnect($db);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class=''>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["units"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["country"] . "</td>";
                echo "</tr>";
            }
        }
    }
}


function getCheapestFruits($cheap_price) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT * FROM Fruit WHERE price <= '".$cheap_price."'";
        $result = mysqli_query($db,$sql);
        disconnect($db);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class=''>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["units"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["country"] . "</td>";
                echo "</tr>";
            }
        }
    }
}

function insertFruit($name, $units, $quantity, $price, $country){
    $db = connect();
    if ($db != NULL) {
        $sql = "INSERT INTO Fruit (name, units, quantity, price, country) Values (\"" . $name . "\",\"" . $units . "\"," . $quantity . "," . $price . ",\"" . $country . "\");";

        if (mysqli_query($db,$sql)) {
            echo "\nNew record created succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
        return false;
    }
    return false;
}

function delete_by_name($fruit_name){
    $db = connect();
    if ($db != NULL) {
        $sql = "DELETE FROM Fruit WHERE name = '".$fruit_name."'";
        if (mysqli_query($db,$sql)) {
            echo "\nRecord deleted succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
        return false;
    }
    return false;
}

function update_by_name($name2, $units2, $quantity2, $price2, $country2){
    $db = connect();
    if ($db != NULL) {
        $sql = "UPDATE Fruit SET units=$units2, quantity=$quantity2, price=$price2, country='$country2' WHERE name = '".$name2."'";

        if (mysqli_query($db,$sql)) {
            echo "\nRecord modified succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
        return false;
    }
    return false;
}

function addFruit($name, $units, $quantity, $price, $country){
    $db = connect();
    if ($db != NULL) {
        $sql = "CALL p('$name', $units, $quantity, $price, '$country')";

        if (mysqli_query($db,$sql)) {
            echo "New record created succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
        return false;
    }
    return false;
}

//var_dump(login('cesar', 'basket'));
?>