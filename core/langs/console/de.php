<?php

return array(
    "console.command.notfound" => "Der Befehl \"%command%\" konnte nicht gefunden werden.",
    "console.command.notimplemented" => "Der Befehl \"%newcommand%\" ist aktuell noch nicht implementiert.",
    "console.command.help.title" => "Hilfe",
    "console.command.help.options" => "Benutzung: php console [option] [command]",
    "console.command.help.withoutclear" => "Verhindert das die Console vor dem Ausführen des Befehles geleert wird.",
    "console.command.help.withdebug" => "Zeigt Debugwerte aus dem MyOnePager System",
    "console.command.genPluginInfo.success" => "Die plugin.json des Plugins \"%plugin%\" wurde erfolgreich neugeneriert.",
    "console.command.genPluginInfo.pluginnotfound" => "Das Plugin \"%plugin%\" konnte nicht im System gefunden werden. \r\nIst es überhaupt installiert?",
    "console.command.genPluginInfo.help" => "\tBenutzung: php console genPluginInfo --id=plugin.id\n\tGeneriert die plugin.json des Plugins neu.",
    "console.command.genPluginInfo.paramnotfound" => "Bitte nutze den Parameter --id=plugin.id um ein Plugin auszuwählen.",
    "console.command.installPlugin.help" => "\tBenutzung: php console installPlugin --id=plugin.id\n\tInstalliert ein Plugin welches via --id angegeben wird",
    "console.command.makeHashes.files.found" => "Datein wurden gefunden",
    "console.command.makeHashes.success" => "Die MD5-Hashes aller Datein wurden generiert und gespeichert.",
    "console.command.makeHashes.help" => "\tBenutzung: php console makeHashes [--silent]\n\tGeneriert MD5-Hashes von allen Datein innerhalb der MyOnePager Installation und schützt somit vor Fileinclusion\n\t--silent -generiert alle MD5-Hashes ohne Ausgabe",
    "console.command.phpshell.help" => "\tBenutzung: php console phpshell\n\tErlaubt Zugriff auf den Quellcode in einer Shell",
    "console.command.update.help" => "\tBenutzung: php console update [--do-update]\n\tPrüft ob Updates vorhanden sind. Mit der Option --do-update wird das Update ausgeführt",
    "console.command.version.help" => "\tBenutzung: php console version\n\tZeigt die Versionen aller MyOnePager Komponenten und aller installierten Plugins",
);
