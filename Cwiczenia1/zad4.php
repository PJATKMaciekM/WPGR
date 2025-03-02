<?php
    $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of
Lorem Ipsum.";
    $signs = array(",", ".", "'");
    $array = explode(" ", $text);
    for ($i = 0; $i < count($array); $i++) {
        foreach ($signs as $sign) {
            if (str_contains($array[$i], $sign)) {
                if ($i != count($array) - 1) {
                    $array[$i] = $array[$i+1];
                    $i=$i-1;
                }
            }
        }
    }
    $map = array();
    foreach (array_chunk($array, 2) as $chunk) {
        if (count($chunk) === 2) {
            $map[$chunk[0]] = $chunk[1];
        }
    }
    foreach ($map as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }
?>
