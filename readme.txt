----- README FILE ------

-sum up files created this far.

Pay attention to the queries ($query= "SQL_strings") located where u click thru categories, and artifacts, everytime u interact with db.
(files: main, expandcategory, showimage,2, showartifact)
Pay attention to url params being echoed out.

SEPT 23rd
-update: finally got right <img> to show up in expandcategory.php 
-prob: didn't have $artid var showing up in url as it wasn't instantiated in local scope (of while loop)

-made the mistake of thinking local vars redeclared from global names would bleed back to global.
->No u fool, global counts in local not the other way around. 

SEPT 26th
-put $title in the alt="" html, for accessibility
-register user works, shows up in db, but session cookies still weird.
-



------ IMPORTANT PHP NOTES -------

-WHERE clause is most widely used SQL statement modifier, allows
specific conditions to filter data from 'result set'

-test your queries first in phpMyAdmin so u can see result right there,
saving u from difficult debugging.

-fopen(), fclose(),







