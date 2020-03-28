<?php

/**
 * FILTER SITE
 */
function site(string $param = null):string    
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }
    return SITE["root"];
}

/**
 * FILTER SOCIAL
 */
function social(string $param = null):string    
{
    if ($param && !empty(SOCIAL[$param])) {
        return SOCIAL[$param];
    }
    return SITE["root"];
}

/**
 * DESTINY ASSETS
 */
function asset(string $path):string
{
    return site("root") . "/Views/assets/{$path}";
}

/**
 * Image Route
 */
function routeImage(string $imageUrl): string
{
    return "https://via.placeholder.com/1200x628/0984e3/FFFFFF?text={$imageUrl}";
}

/**
 * MESSAGE CONTROL
 */
function flash (string $type = null, string $message = null): ?string
{
    if ($type && $message)
    {
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];
    return null;
    }

    if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"])
    {
        unset($_SESSION["flash"]);

        return "<div class=\"message{$flash["type"]}\" >{$message}</div>";
    }
    return null;
}