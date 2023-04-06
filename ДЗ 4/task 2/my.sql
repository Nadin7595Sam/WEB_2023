-- create
CREATE TABLE Студенты (
  empId INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age TEXT NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO Студенты (name, age, address) VALUES ('Алексей', '36', 'Москва');
INSERT INTO Студенты (name, age, address) VALUES ('Никита', '23', 'Саратов');
INSERT INTO Студенты (name, age, address) VALUES ('Зарина', '40', 'Ижевск');
INSERT INTO Студенты (name, age, address) VALUES ('Елена', '28', 'Москва');
INSERT INTO Студенты (name, age, address) VALUES ('Федор', '32', 'Москва');
INSERT INTO Студенты (name, age, address) VALUES ('Екатерина', '40', 'Казань');
INSERT INTO Студенты (name, age, address) VALUES ('Альберт', '37', 'Саратов');
INSERT INTO Студенты (name, age, address) VALUES ('Семён', '20', 'Москва');

-- fetch 
SELECT
empId as "Id",
name as "Имя"
FROM Студенты
WHERE address = 'Москва'
AND age BETWEEN 18 AND 30
ORDER BY name;