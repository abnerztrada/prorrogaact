<?php
defined('MOODLE_INTERNAL') || die();

$tasks = array(
    // enroll new users
    array(
        'classname' => '\tool_prorroga\task\prorroga',
        'blocking' => 0,
        'minute' => '*',
        'hour' => '*',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*',
    ),
);
