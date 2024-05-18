CREATE TABLE appointments (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  date TEXT NOT NULL,
  time TEXT NOT NULL,
  name TEXT,
  message TEXT NOT NULL
);

CREATE TABLE products (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT NOT NULL,
  image_path TEXT,
  price REAL NOT NULL,
  category TEXT
);

CREATE TABLE users (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  username TEXT NOT NULL,
  email TEXT NOT NULL,
  password TEXT NOT NULL
);

INSERT INTO appointments (date, time, name, message) VALUES ('2023-05-10', '10:00:00', 'John Doe', 'Checkup');
INSERT INTO products (name, price, image_path, category) VALUES ('iPhone 15', 879.00, './images/shop/iPhone_15.png', 'Smartphone');
INSERT INTO products (name, price, image_path, category) VALUES ('iPhone 13 Pro Max', 699.00, './images/shop/iphone_13promax.png', 'Smartphone');
INSERT INTO products (name, price, image_path, category) VALUES ('Samsung S24 Ultra', 1299.00, './images/shop/SM_S24Ultra.png', 'Smartphone');
INSERT INTO products (name, price, image_path, category) VALUES ('Samsung A55 5G', 499.00, './images/shop/SM_A55.png', 'Smartphone');
INSERT INTO users (username, email, password) VALUES ('admin', 'admin@gmail.com', 'password123');
