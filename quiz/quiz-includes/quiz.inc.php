<?php

    if (isset($_GET['submite'])){
        require_once '../../includes/dbh.php';

        // Prepare the query
        $query = "SELECT * FROM tbleasyquiz WHERE difficulty = 'e'";
        $result = $conn->query($query);

        // Check if the query was successful
        if ($result) {
            // Initialize an empty array to store rows
            $rows = array();

            // Fetch associative rows and store them in the $rows array
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }

            // Free the result set
            $result->free_result();
        } else {
            echo "Query error: " . $conn->error;
        }

        // Close the connection
        $conn->close();

        // Now, $rows contains the fetched rows as associative arrays
        // You can loop through $rows to access each row's data
        foreach ($rows as $row) {
            // Access fields using $row['field_name']
            echo "Q: " . $row['question'] . "<br>";
            echo "A. " . $row['option1'] . "<br>";
            echo "B. " . $row['option2'] . "<br>";
            echo "C. " . $row['option3'] . "<br>";
            echo "D. " . $row['option4'] . "<br>";
        }

    }else if (isset($_GET['submitm'])){
        
    }else if (isset($_GET['submith'])){
        
    }else{
        header("location: ../quizhome.php");
    }