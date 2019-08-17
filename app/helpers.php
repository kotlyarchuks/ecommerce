<?php

function presentPrice($price){
    return '$' . number_format($price / 100, 2);
}

function getProductImage($productImagePath){
    $full_path = asset('/storage'). '/' . $productImagePath;
    if ($productImagePath){
        return $full_path;
    } else {
        return asset('\images\default-avatar.png');
    } ;
}