#!C:/Python27/python.exe -u
print("Content-Type: text/html\n")

import cgi, os
from view import getList


form = cgi.FieldStorage()
if 'id' in form:
    pageId = form["id"].value
    description = open('data/'+pageId, 'r').read()
else:
    pageId = 'Welcome'
    description = 'Hello, web'

print('''<!doctype html>
<html>
<head>
    <title>WEB1 - Welcome</title>
    <meta charset="utf-8">
</head>
<body>
    <h1><a href="index.py">WEB</a></h1>
    <ol>
        {listStr}
    </ol>
    <a href="create.py">create</a>
    <form action="process_createch.py" method="post">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea rows="4" name="description"
        placeholder="description"></textarea></p>
        <p><input type="submit"></p>
    </form>
    <h2>{title}</h2>
    <p>JE suis Jungmin. J'etudie francais et programmation.c'est pour
    ca que j'ecris le francais ici , cette page.^^ </p>
    <p>{desc}</p>
</body>
</html>
'''.format(title=pageId, desc=description, listStr=getList))
