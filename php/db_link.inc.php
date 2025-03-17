<?php

namespace DB;

require __DIR__ . '/config.inc.php';

use PDO;
use PDOException;

/**
 * Classe DBLink : gestionnaire de la connexion à la base de données
 * @author Vincent MARTIN
 * @version 2.0
 */
class DBLink
{
    /**
     * Se connecte à la base de données
     * @var string $base Nom de la base de données
     * @var string $message ensemble des messages à retourner à l'utilisateur, séparés par un saut de ligne
     * @return PDO|false Objet de liaison à la base de données ou false si erreur
     */
    public static function connect2db($base, &$message)
    {
        try {
            $link = new PDO('mysql:host=' . MYHOST . ';dbname=' . $base . ';charset=UTF8', MYUSER, MYPASS);
            $link->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            $link->exec("set names utf8");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $message .= $e->getMessage() . '<br>';
            $link = false;
        }
        return $link;
    }

    /**
     * Déconnexion de la base de données
     * @var PDO $link Objet de liaison à la base de données
     */
    public static function disconnect(&$link)
    {
        $link = null;
    }
}
