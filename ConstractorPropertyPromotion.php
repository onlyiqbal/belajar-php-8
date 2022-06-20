<?php

class Product
{
    public function __construct(
        public string $id,
        public string $name,
        public int $price,
        public int $entity,
        private bool $expensive
    ) {
    }
};


$product = new Product(id: "1", name: "Bakso", price: 12000, entity: 1, expensive: true);
var_dump($product);
echo $product->name . PHP_EOL;
