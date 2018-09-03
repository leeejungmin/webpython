#!C:\Users\dlwjd\AppData\Local\Programs\Python\Python37\python.exe -u
import cgi, os

form = cgi.FieldStorage()
pageId = form["pageId"].value

os.remove('data/'+pageId)

print("Location: index.py")
print("\n")
