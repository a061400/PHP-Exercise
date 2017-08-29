<table border="1" width="100%">

        <?php
        for ($k=2; $k<10; $k+=4) {
            echo '<tr>';

            for ($j = $k; $j <= $k+3; $j++) {
                switch ($j){
                    case 2: case 4: case 7: case 9:
                    echo '<td bgcolor="gray">';

                    for ($i = 1; $i <= 9; $i++) {
                        $r = $j * $i;
                        echo "{$j} x {$i} = {$r}<br>";

                    }
                    break;
                    case 3: case 5: case 6: case 8:
                    echo '<td bgcolor="#a9a9a9">';

                    for ($i = 1; $i <= 9; $i++) {
                        $r = $j * $i;
                        echo "{$j} x {$i} = {$r}<br>";
                    }
                    break;
                }


            }
            echo '</tr>';

        }
        ?>


</table>