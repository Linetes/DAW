<?php
function connect() {
    $ENV = "dev";
    if ($ENV == "dev") {
        $mysql = mysqli_connect("127.0.0.1","Linetes","cesarb13","lab14", 8889);
        //root si estan en windows
    } else  if ($ENV == "prod"){
        $mysql = mysqli_connect("127.0.0.1","Linetes","cesarb13","lab14", 8889);
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

function crearProducto($nombre, $imagen) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query='INSERT INTO productos (nombre,imagen) VALUES (?,?) ';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("ss", $nombre, $imagen)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }


        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return false;
}



function getTable($tabla) {
    $db = connect();
    if ($db != NULL) {

        //Specification of the SQL query
        $query='SELECT * FROM '.$tabla;
        $query;
        // Query execution; returns identifier of the result group
        $results = $db->query($query);
        // cycle to explode every line of the results

        $html = '<table class="striped">';
        $html .= '<thead>';
        $html .= '<tr>';
        $columnas = $results->fetch_fields();
        for($i=0; $i<count($columnas); $i++) {
            $html .= '<th>'.$columnas[$i]->name.'</th>';
        }
        $html .= '</tr>';
        $html .= '</thead>';

        $html .= '<tbody>';
        while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
            // Options: MYSQLI_NUM to use only numeric indexes
            // MYSQLI_ASSOC to use only name (string) indexes
            // MYSQLI_BOTH, to use both
            $html .= '<tr>';
            for($i=0; $i<count($fila); $i++) {
                // use of numeric index
                $html .= '<td>'.$fila[$i].'</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</tbody></table>';
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($db);
        return $html;
    }
    return false;
}

function getProductos() {
    $db = connect();
    if ($db != NULL) {

        //Specification of the SQL query
        $query='SELECT * FROM productos';
        $query;
        // Query execution; returns identifier of the result group
        $results = $db->query($query);
        // cycle to explode every line of the results
        $html = '';

        while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
            // Options: MYSQLI_NUM to use only numeric indexes
            // MYSQLI_ASSOC to use only name (string) indexes
            // MYSQLI_BOTH, to use both
            $html .= '<div class="row">
                <div class="col s12 m7">
                  <div class="card" style="width:18rem;">
                    <div class="card-image-top">
                      <img src="uploads/'.$fila["imagen"].'" style="width:18rem;">
                    </div>
                    <div class="card-body">
                        <span class="card-title">'.$fila["nombre"].'</span>
                        <div class="card-content">
                          <p>Publicado el: '.$fila["created_at"].'.</p>
                        </div>
                        <div class="card-action">
                          <a href="editar.php?id='.$fila["id"].'">Editar</a>
                        </div>
                    </div>            
                  </div>
                </div>
              </div>';
        }
        echo $html;
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return true;
}

function getFruits() {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT * FROM Fruit";
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
            echo "New record created succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
    }
}

function delete_by_name($fruit_name){
    $db = connect();
    if ($db != NULL) {
        $sql = "DELETE FROM Fruit WHERE name = '".$fruit_name."'";
        if (mysqli_query($db,$sql)) {
            echo "New record deleted succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
    }
}

function update_by_name($name2, $units2, $quantity2, $price2, $country2){
    $db = connect();
    if ($db != NULL) {
        $sql = "UPDATE Fruit SET units=$units2, quantity=$quantity2, price=$price2, country='$country2' WHERE name = '".$name2."'";

        if (mysqli_query($db,$sql)) {
            echo "New record modified succesfully";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
    }
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
    }
}

//var_dump(login('cesar', 'basket'));
?>