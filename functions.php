<?php

function displayNameAsMarquee(string $name): string {
    if($name === ' ') {
        return false;
    } else {
        return '<marquee>' . $name . '</marquee>';
    }

}