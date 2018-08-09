#!C:/Python27/python.exe -u
print("Content-Type: text/html\n")


import cgi, os

files = os.listdir('data')
print(files)
listStr = ''
for item in files:
    listStr = listStr + '<li><a href="index.py?id={name}">{name}</a></li>'.format(name=item)


form = cgi.FieldStorage()
if 'id' in form:
    pageId =form["id"].value
    description = open('data/'+pageId,'r').read()
    update_link = '<a href="update.py?id={}">update</a>'.format(pageId)
else:
    pageId='Welcome'
    description = 'Hello, web ,je suis jungmin ^^ enchante!!'
    update_link = ''
print(pageId)

print('''
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB1 - Welcome</title>
  </head>

  <body>

    <h1><a href="index.py">WEB</a></h1>
    <ol>
     {listStr}
    </ol>
    <a href="create.py">create</a>
    {update_link}
    
    <h2>{title}</h2>
    <p>{desc}</p>
  </body>
</html>
'''.format(title=pageId, desc=description, listStr=listStr, update_link=update_link))
