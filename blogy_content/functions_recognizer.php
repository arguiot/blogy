<?php

//function recognizer

$regex = "#include\([a-z0-9.]+\)#";

if (preg_match($regex, $page, $match)
{
  input($match, $regex);
}
