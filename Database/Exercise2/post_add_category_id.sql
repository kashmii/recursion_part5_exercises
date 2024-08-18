ALTER TABLE posts ADD COLUMN category_id INT;
ALTER TABLE posts ADD FOREIGN KEY (category_id) REFERENCES categories(id);
