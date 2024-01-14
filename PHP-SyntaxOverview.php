<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-SyntaxOverview</title>
</head>
<body>
    <?php
        print("<br><strong>PHP- Syntax Overview</strong><br>");
        print("<br><strong>Escaping to PHP</strong><br>");
        # Note: Enclose them with <> symbol.
        $CanonicalPHP = "?php...?";
        $ShortOpenSGML = "?...?";
        $ASPstyle = "%...%";
        $HTMLscript = 'script language="PHP" ... /script';
        print("Cononical PHP tag = $CanonicalPHP <br>");
        print("Short-open (SGML-style) tag = $ShortOpenSGML <br>");
        print("ASP-style tags = $ASPstyle <br>");
        print("HTML script tag = $HTMLscript <br>");

        print("<br><strong>Commenting PHP Code</strong>");
        # Note: Single line comment starts with # and // (do not include <br> tags)
        print "<br> # This is a comment, and <br>
        # This is the second line of the comment. <br>
        // This is a comment too.";
        print "<br>These are the different style of a single line comment.";
        # Note: Multiline comment is enclose with /*...*/ (do not include <br> tags)
        print "<br>/*This is a comment with multiline <br>
                Author : Manny Paquiao <br>
                Purpose: Multiline Demo <br>
                Subject: PHP*/";
        print "<br> This is an example with multiline comments.";

    ?>
</body>
</html>