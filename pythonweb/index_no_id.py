#!C:/Python27/python.exe -u
print("Content-Type: text/html\n")


import cgi
pageId = 'Welcome'

print(pageId)

print('''
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB1 - Welcome</title>
  </head>

  <body>

    <h1><a href="index_no_id.py">WEB</a></h1>
    <ol>
        <li><a href="index.py?id=HTML">HTML</a></li>
        <li><a href="index.py?id=CSS">CSS</a></li>
        <li><a href="index.py?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>{title}</h2>
    <p>JE suis Jungmin. J'etudie francais et programmation.c'est pour
    ca que j'ecris le francais ici , cette page.^^ </p>
  </body>
</html>
'''.format(title='pageId'))
