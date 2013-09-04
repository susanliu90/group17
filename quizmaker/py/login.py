#!/usr/local/bin/python
import cgi
import cgitb; cgitb.enable()
# get the info from the html form
form = cgi.FieldStorage()
#set up the html stuff
reshtml = """Content-Type: text/html\n
<html>
 <head></head>
 <body>
 """

print reshtml

email = form['email']
password = form['pwd']
print "<strong>email:</strong> "+email
print "<strong>password:</strong> "+password

print '</body>'
print '</html>'