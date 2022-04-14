<?php

    define("HOSTNAME", "ec2-23-20-224-166.compute-1.amazonaws.com");
    define("USERNAME", "kscrsidziigjyc");
    define("PASSWORD", "42d185fc26c35c71448c0d325fca4832800204baabc4d90adcc75e60c8343c83");
    define("SCHEMA", "d1efemupdkvbeh");
    define("PORT", 5432);

    function getConnection()
    {
        try
        {
            $key = "strval";
            $con = new PDO("pgsql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)};port={$key(PORT)}", USERNAME, PASSWORD);
            $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $con;
        }
        catch (PDOException $error)
        {
            echo "Erro ao conectar ao banco de dados. Erro: {$error->getMessage()}";
            exit;
        }
    }


