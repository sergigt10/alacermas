<?php

    function translatePHP($value, $type) 
    {
        switch ( app()->getLocale() ) {
            case 'ca':
                if($type === 'titol'){
                    return $value->titol_cat;
                } else if ($type === 'nom') {
                    return $value->nom_cat;
                } else {
                    return $value->descripcio_cat;
                }
                break;
            case 'en':
                if($type === 'titol'){
                    return $value->titol_eng;
                } else if ($type === 'nom') {
                    return $value->nom_eng;
                } else {
                    return $value->descripcio_eng;
                }
                break;
            case 'fr':
                if($type === 'titol'){
                    return $value->titol_fra;
                } else if ($type === 'nom') {
                    return $value->nom_fra;
                } else {
                    return $value->descripcio_fra;
                }
                break;
            default:
                if($type === 'titol'){
                    return $value->titol_esp;
                } else if ($type === 'nom') {
                    return $value->nom_esp;
                } else {
                    return $value->descripcio_esp;
                }
        }
    }