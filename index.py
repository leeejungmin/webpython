#!C:/Python27/python.exe -u
print("Content-Type: text/html\n")


import cgi, os
from view import getList



form = cgi.FieldStorage()
if 'id' in form:
    pageId =form["id"].value
    description = open('data/'+pageId,'r').read()
    description = description.replace('<', '&lt;')
    description = description.replace('>', '&gt;')

    update_link = '<a href="update.py?id={}">update</a>'.format(pageId)
    delete_action ='''
        <form action="process_delete.py" method="post">
            <input type="hidden" name="pageId" value="{}">
            <input type="submit" value="delete">
        </form>
    '''.format(pageId)
else:
    pageId='Welcome'
    description = 'Hello, web ,je suis jungmin ^^ enchante!!'
    update_link = ''
    delete_action = ''
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
    {delete_action}
    <h2>{title}</h2>
    <p>{desc}</p>
  </body>
</html>
'''.format(title=pageId, desc=description, listStr=getList(), update_link=update_link, delete_action=delete_action))
