create database icatalogo;

use icatalogo;

create table tbl_produto(
    id int primary key auto_increment,
    descricao varchar(255) not null,
    peso decimal(10,2) not null,
    quantidade int not null,
    cor varchar(100) not null,
    tamanho varchar(100),
    valor decimal(10,2) not null,
    desconto int,
    imagem varchar(500)
);

drop table tbl_produto;

select id, descricao from tbl_produto;

INSERT INTO tbl_produto (descricao, peso, quantidade, cor, tamanho, valor, desconto) VALUES ('descricao do produto', 1.2, 100, "Preto", "G", 10.5, 15);

INSERT INTO tbl_produto (descricao, peso, quantidade, cor, tamanho, valor, desconto) VALUES ('abobrinha', 123, 1, 'preto', 35, 120, 10);

INSERT INTO tbl_produto (descricao, peso, quantidade, cor, tamanho, valor, desconto) VALUES ('abobrinha', 123, 1, 'preto', 35, 120, 10);

SELECT * FROM tbl_produto;

delete from tbl_produto;
