CREATE TABLE IF NOT EXISTS commentLikes (
  user_id INT,
  comment_id INT,
  PRIMARY KEY (user_id, comment_id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (comment_id) REFERENCES posts(id)
);