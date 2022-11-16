<?php

return [
    'topics' => [
        'component_name' => 'Liste de sujets',
        'component_description' => 'Affiche la liste de tous les sujets.',
        'per_page' => 'Sujets par page',
        'per_page_validation' => 'Format invalide de sujets par page',
    ],
    'topic' => [
        'page_name' => 'Page Sujet',
        'page_help' => 'Nom de la page à utiliser lors du clic sur un sujet.',
    ],
    'posts' => [
        'component_name' => 'Liste de messages',
        'component_description' => 'Affiche la liste de tous les messages.',
        'per_page' => 'Messages par page',
        'per_page_validation' => 'Messages par page doit être un nombre',
    ],
    'member' => [
        'page_name' => 'Page Membre',
        'page_help' => 'Nom de la page à utiliser lors du clic sur un membre.',
    ],
    'channel' => [
        'component_name' => 'Catégorie',
        'component_description' => "Affiche la liste des sujets d'une catégorie.",
        'page_name' => 'Page Catégorie',
        'page_help' => 'Nom de la page à utiliser lors du clic sur une catégorie.',
    ],
    'channels' => [
        'new_channel' => 'Nouvelle Catégorie',
        'delete_selected_confirm' => 'Êtes-vous sûr?',
        'delete' => 'Supprimer',
        'manage' => "Gérer l'ordre des catégories",
        'return' => 'Retour aux Catégories',
        'name' => 'Catégories',
        'create' => 'Créer une Catégorie',
        'update' => 'Modifier la Catégorie',
        'preview' => 'Prévisualiser la Catégorie',
        'manage' => 'Gérer les Catégories',
        'creating' => 'Création de la Catégorie...',
        'create' => 'Créer',
        'createnclose' => 'Créer et Fermer',
        'cancel' => 'Annuler',
        'or' => 'ou',
        'returnlist' => 'Retour à la liste des catégories',
        'saving' => 'Enregistrement de la Catégorie...',
        'save' => 'Enregistrer',
        'savenclose' => 'Enregistrer et Fermer',
        'deleting' => 'Suppression de la Catégorie...',
        'really' => 'Êtes vous sûr de vouloir supprimer cette Catégorie?',
        'list_name' => 'Liste des catégories',
        'list_desc' => 'Affiche la liste de toutes les catégories visibles.',
    ],
    'slug' => [
        'name' => 'Nom du paramètre slug',
        'desc' => "Le paramètre dans l'URL utilisé pour retrouver une catégorie par son slug. Un slug écris en dur peut aussi être utilisé.",
    ],
    'frontend' => [
        'notopic' => "Il n'y a aucun sujet dans cette catégorie.",
    ],
    'plugin' => [
        'name' => 'Forum',
        'description' => 'Un forum basique intégrable.',
    ],
    'data' => [
        'title' => 'Titre',
        'desc' => 'Description',
        'slug' => 'Slug',
        'parent' => 'Parent',
        'noparent' => '-- Aucun parent --',
        'moderated' => 'Modéré',
        'is_mod' => 'Seul les modérateurs peuvent discuter dans cette catégorie.',
        'hidden' => 'Cachée',
        'is_hidden' => 'Cacher cette catégorie dans la liste principale des catégories.',
        'guarded' => 'Protection anti-spam',
        'is_guarded' => 'Les membres doivent être approuvés par les modérateurs avant que leurs messages ne soient diffusés aux visiteurs non-enregistrés.',
    ],
    'settings' => [
        'username' => "Nom d'utilisateur",
        'username_comment' => 'Représentant cet utilisateur sur le forum.',
        'moderator' => 'Modérateur du forum',
        'moderator_comment' => "Cochez cette case si l'utilisateur peut modérer le forum entier.",
        'banned' => 'Bannis du forum',
        'banned_comment' => "Cochez cette case si l'utilisateur doit être interdit de discuter sur le forum.",
        'forum_username' => "Nom d'utilisateur du forum",
        'channels' => 'Catégories du forum',
        'channels_desc' => 'Gérer les catégories disponibles du forum.',
        'channels_filter' => 'Filtre de catégorie',
        'channels_filter_description' => "Saisissez un slug de catégorie ou un paramètre d'URL à utiliser pour filtrer les sujets. Laissez vide pour afficher tous les sujets.",
        'rssfeed_title' => 'Flux RSS',
        'rssfeed_description' => 'Génère un flux RSS contenant les sujets du forum.',
        'rssfeed_forum' => 'Page Forum',
        'rssfeed_forum_description' => 'Nom de la page principale du forum pour la génération des liens. Cette propriété est utilisée par le partiel par défaut du composant.',
    ],
    'embedch' => [
        'channel_name' => 'Catégorie intégrée',
        'channel_self_desc' => "Affiche une catégorie sur n'importe quel page.",
        'channel_title' => 'Catégorie parente',
        'channel_desc' => 'Spécifie la catégorie parente dans laquelle créer la nouvelle',
        'embed_title' => "Paramètre du code d'intégration",
        'embed_desc' => 'Un code unique pour la catégorie générée. Un paramètre de routage peut aussi être utilisé.',
        'topic_name' => 'Paramètre du code du sujet',
        'topic_desc' => "Le paramètre de routage d'URL utilisé pour rechercher le sujet par son slug.",
    ],
    'embedtopic' => [
        'topic_name' => 'Sujet intégré',
        'topic_self_desc' => "Affiche un sujet sur n'importe quel page.",
        'target_name' => 'Catégorie visée',
        'target_desc' => 'Spécifie la catégorie dans laquelle créer le nouveau sujet ou nouvelle catégorie',
        'embed_title' => "Code d'intégration",
        'embed_desc' => 'Un code unique pour la génération du sujet ou de la catégorie. Un paramètre de routage peut aussi être utilisé.',
    ],
    'memberpage' => [
        'name' => 'Membre',
        'self_desc' => "Affiche le formulation d'information du membre et ses activités.",
        'slug_name' => 'Nom du paramètre slug',
        'slug_desc' => "Le paramètre dans l'URL utilisé pour retrouver un membre par son slug. Un slug écris en dur peut aussi être utilisé.",
        'view_title' => 'Mode de vue',
        'view_desc' => 'Définissez manuellement le mode de vue pour le composant membre.',
        'ch_title' => 'Page catégorie',
        'ch_desc' => 'Nom de la page à utiliser lors du clic sur une catégorie.',
        'topic_title' => 'Page sujet',
        'topic_desc' => 'Nom de la page à utiliser lors du clic sur un sujet.',
    ],
    'topicpage' => [
        'name' => 'Sujet',
        'self_desc' => 'Affiche un sujet et ses messages.',
        'slug_name' => 'Nom du paramètre slug',
        'slug_desc' => "Le paramètre dans l'URL utilisé pour retrouver un sujet par son slug. Un slug écris en dur peut aussi être utilisé.",
        'channel_title' => 'Page catégorie',
        'channel_desc' => 'Nom de la page à utiliser lors du clic sur une catégorie.',
    ],
    'components' => [
        'general' => [
            'properties' => [
                'includeStyles' => 'Activer le CSS',
                'includeStyles_desc' => 'Intègre les fichiers CSS par défaut pour le forum',
            ],
        ],
    ],
    'menuitem' => [
        'forum_channel' => 'Catégorie du forum',
        'all_forum_channels' => 'Toutes les catégories du forum',
        'all_forum_topics' => 'Tous les sujets du forum'
    ],
];