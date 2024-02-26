CREATE TABLE usuario(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    tipo ENUM("admin", "aluno", "professor"),
    email VARCHAR(50),
    senha VARCHAR(15)); 
CREATE TABLE aluno(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100),
    turma ENUM("A", "B", "C", "D", "E"),
    ano ENUM("1°", "2°", "3°")); 
create table registro(
	id int PRIMARY key not null AUTO_INCREMENT,
    motivo enum("lanche", "banheiro", "pessoal", "consulta", "questões escolares"),
    data date,
    id_aluno int,
    id_usuario int,
    FOREIGN key (id_aluno) references aluno(id),
    FOREIGN key (id_usuario) references usuario(id));
