<?php



function contentImage($path)
{
    return  $path != null && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('assets/imgs/about-us.png');
}

function getResume($doc)
{
    $link = json_decode($doc);
    //Check if file in storage exists or is an empty array
    if ($link == []) {
        return false; 
    } else {
        $path = json_decode($doc)[0]->download_link;
        return  '/storage/' . $path;
    }
}
