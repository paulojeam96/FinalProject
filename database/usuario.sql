
CREATE TABLE IF NOT EXISTS `usuario` (
   ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `datanascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `endereco` varchar(90) NOT NULL,
  `cidade` varchar(90) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(12) NOT NULL,
 primary key (ID));

