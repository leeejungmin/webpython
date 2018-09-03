#!C:\Users\dlwjd\AppData\Local\Programs\Python\Python37\python.exe -u
print("Content-Type: text/html\n")

import cgi


form = cgi.FieldStorage()

if 'title' in form:
    title = form["title"].value
else :
    title = 'tres bien ou pas'

print('               \n')

if 'description' in form:
    description = form['description'].value
else :
    description = 'je sais pas encore'
print(title, description)
open_file = open('data/' +title, 'w')
open_file.write(description)
