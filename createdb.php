<?php
    //$pdo = new PDO('mysql:host=localhost;', 'root', 'root');
    $pdo = new PDO('mysql:host=localhost;port=3306','root','root'); //Si PDO n'arrive pas à faire le lien avec la base de données
    $sql = "CREATE DATABASE IF NOT EXISTS `apiRest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
    $pdo->exec($sql);

    try {
        //$pdo = new PDO('mysql:host=localhost;', 'root', 'root');
        $pdo = new PDO('mysql:host=localhost;port=3306','root','root'); //Si PDO n'arrive pas à faire le lien avec la base de données

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ligne qui permet d'afficher les erreurs s'il y en a.

        $sql = "CREATE TABLE IF NOT EXISTS `apiRest`.`produit` (
                    `id` int(11) NOT NULL AUTO_INCREMENT,
                    `name` varchar(256) NOT NULL,
                    `description` text NOT NULL,
                    `price` int(255) NOT NULL,
                    `category_id` int(11) NOT NULL,
                    `created` datetime,
                    `modified` timestamp DEFAULT CURRENT_TIMESTAMP,
                    primary key (id)
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8";

        $pdo->exec($sql);

        echo 'Félicitations, la table à bien été créée !';
    } catch (PDOException $e) {
        print "Erreur : " . $e->getMessage() . "<br/>";
        die();
    }