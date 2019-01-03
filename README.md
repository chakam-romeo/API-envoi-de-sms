# API-envoi-de-sms
Ce dépot vous permet d'envoyer des sms en utilisant la plateforme NUFISMS

Welcome to the API-envoi-de-sms wiki!

Comment installer et envoyer des SMS depuis votre application php?

1- Créer un compte sur la plateforme NUFISMS
Créer votre compte sur la plateforme nufisms([ici](https://nufisms.com)) et envoyer des SMS dans plus de 170 pays du monde

Une fois votre compte créer aller dans la section API et générer votre code API et token que vous allez utiliser dans votre projet

2- Installation et configuration

a) Charger la classe NUFISMS.php dans votre projet 
`<?php

            include_once('NufiSMSAPI.php');
            $url = 'http://nufisms.com/api/v1/';
            $var['api_key'] = "votre code API";
            $var['token'] = "votre token";
            $var['type_sms'] = type SMS; 
            $var['exp_sms'] = "expediteur";
            $var['dest_sms'] = "destinataire";
            $var['code_phone'] = "code téléphonique";
            $var['sms'] = "Message";
