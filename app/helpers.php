<?php

function dateTimeFormat($date) {
    return \Carbon\Carbon::parse($date)->format('d-m-Y H:i:s');
}