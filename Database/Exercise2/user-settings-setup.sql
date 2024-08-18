CREATE TABLE IF NOT EXISTS user_settings (
  entry_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  meta_key VARCHAR(50),
  meta_value VARCHAR(50)
);