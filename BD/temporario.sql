use cv_xpto;

select * from usuario;
ALTER TABLE usuario ADD COLUMN genero varchar(20) AFTER endereco;
ALTER TABLE usuario CHANGE departamneto departamento VARCHAR(70);
describe usuario;
ALTER TABLE usuario MODIFY COLUMN idusuario INT NOT NULL AUTO_INCREMENT;

select * from cartaodevisita;
ALTER TABLE cartaodevisita MODIFY COLUMN idCartaoDeVisita INT NOT NULL AUTO_INCREMENT;
ALTER TABLE cartaodevisita ADD COLUMN aprovado ENUM('pendente', 'aprovado', 'rejeitado') DEFAULT 'pendente' AFTER enderecoDaEmpresa;

select * from administrador;
alter table administrador drop column gestaoDeAcesso;
ALTER TABLE administrador MODIFY COLUMN idadministrador INT NOT NULL AUTO_INCREMENT;