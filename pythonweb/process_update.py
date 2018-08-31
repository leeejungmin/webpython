#!C:/Python27/python.exe -u


import cgi, os


form = cgi.FieldStorage()
pageId = form["pageId"].value
title = form["title"].value
description = form['description'].value


open_file = open('data/' +pageId, 'w')
open_file.write(description)
open_file.close()

os.rename('data/'+pageId, 'data/'+title)

print("Location: index.py?id="+title)
print("\n")
