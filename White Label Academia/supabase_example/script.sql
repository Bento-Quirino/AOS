-- Criando entidades
CREATE TABLE pessoas (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    peso DECIMAL,
    altura DECIMAL
);

CREATE TABLE IF NOT EXISTS exercicios (
    name VARCHAR(30) PRIMARY KEY
);

CREATE TABLE pessoa_exercicio (
    pessoa_id INT,
    exercicio_name VARCHAR(30),
    repeticoes INT,
    series INT,
    FOREIGN KEY (pessoa_id) REFERENCES pessoas(id),
    FOREIGN KEY (exercicio_name) REFERENCES exercicios(name)
);

-- Dropando entidades
DROP TABLE IF EXISTS pessoa_exercicio;
DROP TABLE IF EXISTS pessoas;
DROP TABLE IF EXISTS exercicios;

/* Seeders para entidades */
-- Criando pessoas
INSERT INTO pessoas (nome, peso, altura) VALUES ('João', 80, 1.80);
INSERT INTO pessoas (nome, peso, altura) VALUES ('Maria', 60, 1.60);

-- Criando exercícios
INSERT INTO exercicios (name) VALUES ('Supino');
INSERT INTO exercicios (name) VALUES ('Agachamento');
INSERT INTO exercicios (name) VALUES ('Barra fixa');

-- Vinculando exercícios com pessoas
INSERT INTO pessoa_exercicio (pessoa_id, exercicio_name, repeticoes, series) VALUES (1, 'Supino', 10, 3);
INSERT INTO pessoa_exercicio (pessoa_id, exercicio_name, repeticoes, series) VALUES (1, 'Agachamento', 10, 3);
INSERT INTO pessoa_exercicio (pessoa_id, exercicio_name, repeticoes, series) VALUES (2, 'Supino', 10, 3);