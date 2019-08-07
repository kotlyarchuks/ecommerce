<?php

function presentPrice($price){
    return '$' . number_format($price / 100, 2);
}

function getProductImage($productName){
    return asset('images/products') . '/' . $productName . '.jpg';
}