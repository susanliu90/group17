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
firstname = form['firstname'].value
lastname = form['lastname'].value
email = form['email'].value
password = form['pwd'].value
passwordconfirm = form['pwdConfirm'].value
level = form['level'].value
securityq = form['securityq'].value
answer = form['answer'].value

print "<strong>firstname: </strong>"+firstname
print "<strong>lastname: </strong>"+lastname
print "<strong>email: </strong>"+email
print "<strong>password: </strong>"+password
print "<strong>level: </strong>"+level
print "<strong>securityq: </strong>"+securityq
print "<strong>answer: </strong>"+answer

print '</body>'
print '</html>'
