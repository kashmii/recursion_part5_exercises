ALTER TABLE users ADD COLUMN subscription VARCHAR(50);
ALTER TABLE users ADD COLUMN subscription_status VARCHAR(50);
ALTER TABLE users ADD COLUMN subscription_created_at DATETIME;
ALTER TABLE users ADD COLUMN subscription_ends_at DATETIME;
