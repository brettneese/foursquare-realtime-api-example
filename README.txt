# php-foursquare-realtime

As part of a project I'm working on, I needed to make use Foursquare's new-ish Realtime API (https://developer.foursquare.com/overview/realtime) for pushing checkins to my server. I looked around the internet, and found the official and unoffical documentation lacking. Furthermore, I couldn't find any example code using PHP, and I failed at getting the example Python code I did find to work.

So I built my own example, and am releasing the code for other curious new programmers. I admit what I built will likely be rather simplistic for any skilled PHP programmer, but, hey, I'm learning.

Getting this example to work takes a few steps:

NOTE: using foursquare's real-time API requires  a server that accepts HTTPS connections and has valid security certificates. I'm testing on PHPfog, and they include one on every app developed on their *.phpfogapp.com subdomian. YMMV.

1. register a new OAuth consumer with Foursquare (https://foursquare.com/oauth/register). Ensure the "callback URL" is the location of auth.html on your webserver (http://example.com/auth.html). 

2. Create a Mysql database and tables. I've exported the one I used, but look closely and change things as needed.

3. Replace 

. $con = mysql_connect("MYSQL_SERVER","MYSQL_USERNAME","MYSQL_PASSWORD"); 

with the approrpiate information.

4. Back at https://foursquare.com/oauth/, click "More about this consumer" under the appropriate application. Click "edit this consumer" and change "disable pushes to this consumer" to "push checkins by this consumer's users." Click "Save this consumer," and click on "edit this consumer" again.

5. Under "Push URL," enter the location of  checkins.php on your webserver. (http://example.com/checkins.php) and save.

6. Finally, copy your client ID, and take note of your callback URL once again. Edit auth.html and replace 'CLIENT ID' with the one from foursquare, ensuring the single quotes remain. Change the callback url to the location of this file on your server and ensure it's the same one you registered with foursquare.
 
 7. Deploy to your webserver and visit http://example.com/auth.html. If you did everything correctly, it should redirect you to foursquare. Click "allow."

8. Checkin with Foursquare or use the test push console. If everything worked, you should see your checkin appear as a new row in your Mysql table. Congrats :). 

9. If not, debug. Double check. Heck, I could've even erred in these directions or code (let me know.) But, hey, it's an example. Learn from it. I wished I had something like this when I was building, so this is my gift for anyone who was in my spot. It's not perfect. 


Special thanks to Charles (@cbzink on Twitter), for getting me started on the right track, and Ben Alman, whose jquery plugin "BBQ: Back Button & Query Library" is used in the authentication.

If this has been helpful to you, please let me know: @brneese on Twitter, brneese@brneese.com, or http://brneese.com. 