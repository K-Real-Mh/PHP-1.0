<?php
$id = (int) get('id');
$product = getProductById($id);
$comment = (string) post('text');
SendComment($comment, $product);
// $comments = getComments($product);
echo render('product', ['product' => $product, 'comments' => getComments($product)]);
?>
