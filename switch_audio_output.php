<?php
// Simple audio switcher script created by Jeremiah Gadd

// Add your output devices here (run 'pactl list short sinks' and copy the first column)
$outputs = array(
    4,
    2
);

$cur_output = substr($r = `pactl list short sinks | grep RUNNING`, 0, 1);

if (array_search($cur_output, $outputs) != count($outputs) - 1) {
    $new_output_key = array_search($cur_output, $outputs) + 1;
} else {
    $new_output_key = 0;
}

$new_output = $outputs[$new_output_key];

`pacmd set-default-sink $new_output`;

$streams = explode('    index: ', str_replace(PHP_EOL, '', `pacmd list-sink-inputs | grep index: `));
array_shift($streams);

foreach ($streams as $stream) {
    `pacmd move-sink-input $stream $new_output`;
}