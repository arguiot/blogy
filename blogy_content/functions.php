<?php

function input($match, $regex)
{
  $file_requested = file_get_contents(substr($match, 5, -1));
  $page = preg_replace($regex, $file_requested, $page);
}


function foreach($match, $regex)
{
  $foreach_content = substr($match, 15, -8);
  $sql = "SELECT * FROM $table ORDER BY $table_post_date DESC lIMIT 0, $article_number";
  foreach($bdd->query($sql) as $val)
  {
  $articleTitle = $val['post_title'];
  $articleID = $val['ID'];
  $articleDate = $val['post_date'];
  $articleDesc = strip_tags(mb_strimwidth($val['post_content'], 0, $descSize, "..."));
  $articleContent = $val['post_content'];
  articleTagsReplace($foreach_content, $articleTitle, $articleID, $articleDate, $articleDesc, $articleContent);
  }
  $page = preg_replace($regex, $result, $page);
}

function articleTagsReplace($content, $articleTitle, $articleID, $articleDate, $articleDesc, $articleContent)
{
  $regex = "#'['[a-z]+']'#i";
  while (preg_match($regex, $content, $match)
  {
    if(preg_match("#tilte#i", $match))
    {
      $replace = $articleTitle;
    }
    elseif(preg_match("#desc#i", $match))
    {
      $replace = $articleDesc;
    }
    elseif(preg_match("#content#i", $match))
    {
      $replace = $articleContent;
    }
    elseif(preg_match("#id#i", $match))
    {
      $replace = $articleID;
    }
    elseif(preg_match("#date#i", $match))
    {
      $replace = $articleDate;
    }
  }
}
