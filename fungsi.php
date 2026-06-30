<?php

    $koneksi = mysqli_connect("localhost", "root", "", "izaweekly");

    function tampildata($koneksi, $query)
    {
        $result = mysqli_query($koneksi,$query); //// didepan lemari sesuai
        $rows = [];

        while($row = mysqli_fetch_assoc($result))
            {
                $rows[] = $row;
            }

            return $rows;
    }

    ?>
