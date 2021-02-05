<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
</head>

<body>
  <form method="POST" action="mailto:own@aliensabductedme.com">
    <label for="firstname">First name:</label>
    <input type="text" id="firstname" name="firstname" /> <br />
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname" /> <br>
    <label for="email">What is your email address?</label>
    <input type="text" id="email" name="email" /> <br>
    <label for="whenithappened">When did it happen?</label>
    <input type="text" id="whenithappened" name="whenithappened" /><br>
    <label for="howlong">How long were you gone?</label>
    <input type="text" id="howlong" name="howlong" /><br>
    <label for="howmany">How many did you see?</label>
    <input type="text" id="howmany" name="howmany" /><br>
    <label for="aliendescription">Describe them:</label>
    <input type="text" id="aliendescription" name="aliendescription" /> <br>
    <label for="whattheydid">What did they do to you?</label>
    <input type="text" id="whattheydid" name="whattheydid" /> <br>
    <label for="fangspotted">Have you seen my dog Fang?</label>
    Yes <input type="radio" id="fangspotted" name="fangspotted" value="yes" />
    No <input type="radio" id="fangspotted" name="fangspotted" value="no" /> <br>
    <img src="./fang.jpg" alt="My abducted dog Fang photo" /><br>
    <label for="other">Anything else you want to add?</label>
    <textarea id="other" name="other"></textarea><br>
    <input type="submit" value="Report Abduction" name="submit" />
  </form>
</body>

</html>