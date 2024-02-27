CREATE TABLE articles (
	id_articles INTEGER PRIMARY KEY AUTO_INCREMENT,
	Nom_article varchar(50) NOT NULL,
	stock_article varchar(15) NOT NULL,
	prix_article varchar(15) NOT NULL,
	prix_vente varchar(15) NOT NULL
);
INSERT INTO `articles` (`Nom_article`,`stock_article`,`prix_article`,`prix_vente`) VALUES ('Pelle',5,10,9);
INSERT INTO `articles` (`Nom_article`,`stock_article`,`prix_article`,`prix_vente`) VALUES ('Voiture',2,10000,9000);
INSERT INTO `articles` (`Nom_article`,`stock_article`,`prix_article`,`prix_vente`) VALUES ('Clavier',5,79,50);
INSERT INTO `articles` (`Nom_article`,`stock_article`,`prix_article`,`prix_vente`) VALUES ('Pc',5,1500,900);
INSERT INTO `articles` (`Nom_article`,`stock_article`,`prix_article`,`prix_vente`) VALUES ('Aspirateur',5,50,35);
	
CREATE TABLE Client(
	id_client INTEGER PRIMARY KEY AUTO_INCREMENT,
	Mail_Client varchar(50) NOT NULL UNIQUE,
	Mdp_Client varchar(50) NOT NULL,
	Nom_Client varchar(50) NOT NULL,
	Argent INTEGER(11) DEFAULT NULL
);

	
CREATE TABLE Commande (
	id_commande INTEGER PRIMARY KEY AUTO_INCREMENT,
	Date_Commande varchar(15) NOT NULL,
	Numero_Commande varchar(15) NOT NULL UNIQUE,
	Articles_Commande varchar(15) NOT NULL
);
	
CREATE TABLE Client_Article (
	id_client_commande INTEGER PRIMARY KEY AUTO_INCREMENT,
	id_client INTEGER,
	FOREIGN KEY (id_client) REFERENCES client(id_client) ON DELETE CASCADE,
	id_articles INTEGER,
	FOREIGN KEY (id_articles) REFERENCES articles(id_articles) ON DELETE CASCADE
);
	