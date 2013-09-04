#!/usr/bin/perl
use strict;
use warnings;
use CGI;

my $q = new CGI;
print $q->header;
print $q->start_html("QUIZZLER");
print $q->h2("Here are the params");

print "<b>Email: </b>", $q->param('email'), "<br/><b>Password: </b>", $q->param('pwd'); 
# foreach my $q (param()) {
# $form{$q} = param($q);
# print "$q = $form{$q}<br>\n";
# }
print $q->end_html;
