#!C:\Users\dlwjd\AppData\Local\Programs\Python\Python37\python.exe -u


import cgi


form = cgi.FieldStorage()
title = form["title"].value
description = form['description'].value

open_file = open('data/' +title, 'w')
open_file.write(description)

print("Location: /bitnami.css?id="+title)
print("\n")
