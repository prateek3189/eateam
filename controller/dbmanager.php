<?php
    class DBManager {
        function connection() {
            // Create connection
            $conn = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);

            // Check connection
            if(!$conn) {
                die('Could not connect: ' . mysql_error());
            }

            // Select DB
            mysql_select_db(DATABASE);

            return $conn;
        }

        function select($select, $table, $where) {
            $conn = $this->connection();
            $data = array();

            $query = "SELECT ".$select." FROM ". $table;
            if($where) {
                $query .= " WHERE ".$where;
            }
            $result = mysql_query($query, $conn);

            if(!$result) {
                return $data;
            }

            $data = mysql_fetch_object($result);
            $this->close_connection($conn);

            return $data;
        }

        function close_connection($conn) {
            mysql_close($conn);
        }
    }

    $db = new DBManager();
?>
