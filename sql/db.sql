DROP DATABASE IF EXISTS hostel;
CREATE DATABASE hostel;

USE hostel;

CREATE TABLE tbl_reserva (
  id_reserva int(10) unsigned NOT NULL auto_increment,
  nome varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  telefone varchar(255) NOT NULL,
  tempo varchar(255) NOT NULL,
  senha int unsigned NOT NULL,
  chegada varchar(255) NOT NULL,
  comentario varchar(255) NOT NULL,
  PRIMARY KEY (id_reserva)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;
