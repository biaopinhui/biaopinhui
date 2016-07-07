<?php

function product_image($productId, $filename) {
    return asset('storage/products/' . $productId . '/' . $filename);
}