#!/usr/bin/perl
use strict;
use warnings;
use CGI;

my $q = new CGI;
print $q->header;
print $q->start_html("QUIZZLER");
print $q->h2("Here are the params");

print "<b>First Name: </b>", $q->param('firstname'), "<br/><b>Last Name: </b>", $q->param('lastname'), "<br/><b>Email: </b>", $q->param('email'), "<br/><b>Password: </b>", $q->param('pwd'), "<br/><b>User Level: </b>", $q->param('level'), "<br/><b>Security Question: </b>", $q->param('securityq'), "<br/><b>Security Answer: </b>", $q->param('answer'); 

print $q->end_html;
