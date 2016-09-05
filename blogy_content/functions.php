<?php

function input($match, $regex)
{
  $file_requested = file_get_contents(substr($match, 5, -1));
  $page = preg_replace($regex, $file_requested, $page);
}
