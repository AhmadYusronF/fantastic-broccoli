<?php

function ReturnSingleValue($conn, $query)
{
    $result = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_row($result)) {
        return $row[0];
    } else {
        return null;
    }
}
