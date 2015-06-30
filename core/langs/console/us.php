<?php

return array(
    "console.command.notfound" => "The command \"%command%\" can not be found.",
    "console.command.notimplemented" => "The command \"%newcommand%\" is actually not implementet.",
    "console.command.help.title" => "Help",
    "console.command.help.options" => "Usage: php console [option] [command]",
    "console.command.help.withoutclear" => "Prevents clearing the console before performing the command.",
    "console.command.help.withdebug" => "Shows the Debug of the MyOnePager system",
    "console.command.genPluginInfo.success" => "The plugin.json of the plugin \"%plugin%\" was successfully generated.",
    "console.command.genPluginInfo.pluginnotfound" => "The plugin \"%plugin%\" can not be found in the system. \r\nDid you have had installed it?",
    "console.command.genPluginInfo.help" => "\tUsage: php console genPluginInfo --id=plugin.id\n\tGenerates the plugin.json of the plugin.",
    "console.command.genPluginInfo.paramnotfound" => "Please use the parameter --id=plugin.id to select a plugin.",
    "console.command.installPlugin.help" => "\tUsage: php console installPlugin --id=plugin.id\n\tInstalls a plugin wich is given by --id",
    "console.command.makeHashes.files.found" => "Files are found",
    "console.command.makeHashes.success" => "The MD5-Hashes of all files are generatet and saved.",
    "console.command.makeHashes.help" => "\tUsage: php console makeHashes [--silent]\n\tgenerates MD5-HAshes of all files in the MyOnePager installation and protects Fileinclusion\n\t--silent -generates MD5-Hashes without output.",
    "console.command.phpshell.help" => "\tUsage: php console update [--do-update]\n\tChecks for updates. With the option --do-update the update will be done",
    "console.command.version.help" => "\tUsage: php console version\n\tShows the version of all MyOnePager components and of all installed plugins",
);
