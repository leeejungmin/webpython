#!C:/Python27/python.exe -u
print("Content-Type: text/html\n")
print("je suis d'accord")

import cgi
form = cgi.FieldStorage()
pageId = form["id"].value


print('''
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB1 - Welcome</title>
  </head>

  <body>

    <h1><a href="index.html">WEB</a></h1>
    <ol>
        <li><a href="503.html?id=HTML">HTML</a></li>
        <li><a href="bitnami.css?id=css">CSS</a></li>
        <li><a href="javascriptex.html?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>{title}</h2>
    <p>JE suis Jungmin. J'etudie francais et programmation.c'est pour
    ca que j'ecris le francais ici , cette page.^^ </p>
  </body>
</html>
'''.format(title='pageId'))
