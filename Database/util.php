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

function Indikator($alert, $message, $link)
{
    echo '   <div class="wrapper">
      <div class="container">
        <div class="alert-text">
          <div>
            <h2>' . $alert . '</h2>
            <p>' . $message . '</p>
          </div>
        </div>

        <div class="nav">
          <a href="' . $link . '" class="link">Continue</a>
        </div>
      </div>
    </div>';
    exit();
}
