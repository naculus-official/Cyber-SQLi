-- 創建資料庫
CREATE DATABASE cybersqli;

-- 選擇資料庫
USE cybersqli;

-- 創建資料表
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- 插入資料
INSERT INTO users (username, password, email) VALUES 
('admin', 'admin', 'admin@localhost'),
('jack', 'minejack', 'inotgoing@hijack'),
('user', '123456', 'user@localhost');