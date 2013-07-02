<?php
    $year = date('Y');
    $month = date('m');
    
    echo json_encode(array(
        array(
                'id' => 111,
                'title' => "Time 1",
                'start' => "$year-$month-14 15:00",
                'end' => "$year-$month-14 16:00",
                'allDay' => false
        ),
        array(
                'id' => 222,
                'title' => "Time 2",
                'start' => "$year-$month-15 15:00",
                'end' => "$year-$month-15 16:00",
                'allDay' => false
        ),
        array(
                'id' => 333,
                'title' => "Time 3",
                'start' => "$year-$month-15 16:00",
                'end' => "$year-$month-15 17:00",
                'allDay' => false
        )
    ));