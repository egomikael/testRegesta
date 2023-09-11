CREATE TABLE products (
  product_id int(10) NOT NULL,
  product_title varchar(100) NOT NULL,
  product_image text(300) NOT NULL,
  product_price varchar(300) NOT NULL
);

INSERT INTO products (product_id, product_title, product_image, product_price) VALUES
(1, 'Steel tube', 'steel.png', '5,00'),
(2, 'Plastic bar', 'plastic.png', '4,00'),
(3, 'Wood table', 'wood.png', '7,00');