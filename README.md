codesnippets
============

This is a code snippet to split the article date stored in an Anchor database into the day, month and year parts (the day part also strips out the time - Anchor dates are stored as datetime) and to change the month to its string counterpart.
This code snippet is supposed to help people who want to use Anchor for a blog that is not written in English.

Simply add the three functions to anchor/functions/articles.php and use them in your theme.

Of course you can change the German parts to any other language. You can also delete the switch case part in article_month() and just return $month (instead of $month_text) to get the integer value.

The snippet also eliminates leading zeros in $day. If you don't want that, delete $day= ltrim ($day,'0'); and you'll be fine.
