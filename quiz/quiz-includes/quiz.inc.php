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
            echo "<h4>Q: " . $row['question'] . "</h4><br>";
            echo "<label for='option1'>A. " . $row['option1'] . "</label>";
            echo "<input type='radio' id='option1' name='radioGroup, value='A'><br>";
            echo "<label for='option2'>B. " . $row['option2'] . "</label>";
            echo "<input type='radio' id='option2' name='radioGroup, value='B'><br>";
            echo "<label for='option3'>C. " . $row['option3'] . "</label>";
            echo "<input type='radio' id='option3' name='radioGroup, value='C'><br>";
            echo "<label for='option4'>D. " . $row['option4'] . "</label>";
            echo "<input type='radio' id='option4' name='radioGroup, value='D'><br>";
        }
    }else if (isset($_GET['submitm'])){
        
    }else if (isset($_GET['submith'])){
        
    }else{
        header("location: ../quizhome.php");
    }