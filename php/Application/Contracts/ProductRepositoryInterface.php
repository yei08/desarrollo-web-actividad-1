<?php

interface ProductRepositoryInterface {
    public function create(Product $product);
    public function read($id);
    public function update(Product $product);
    public function delete($id);
    public function readAll();
}
?>
