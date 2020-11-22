# Bin-Checker-Bot

A simple Telegram bot, in PHP, to check if the bin is valid or not.

# Duplicating the repository.
The repository in which you add the bot token must be a private one. Adding the token in a public repo is seriosuly harmful.

## How to Duplicate the repository?
1. Fork the repo by clicking [here.](https://github.com/Benchamxd/Bin-Checker/fork)
2. Get any terminal application, [GitBash](https://git-scm.com/) if on pc, [Termux](https://play.google.com/store/apps/details?id=com.termux&hl=en_IN&gl=US) if on Android.
3. Create an empty repository by clicking [here](https://github.com/new). REMEMBER TO KEEP IT **PRIVATE** AND **NOT PUBLIC.** Lets say, your github username is user123, then, the repo would be like user123/Bin-Checker.
4. Now open GitBash/Termux and give the following commands.
✘ `git clone --bare https://github.com/Benchamxd/Bin-Checker.git`
✘ `cd Bin-Checker.git`
✘ `git push --mirror https://github.com/user123/Bin-Checker.git` (edit it to your repo link)
5. Now, to delete the temporary clone that you just did,
✘ `cd ..`
✘ `rm -rf Benchamxd/Bin-Checker.git`
6. Now proceed to [Adding the Bot Token](https://github.com/Benchamxd/Bin-Checker#adding-bot-token)

## Adding bot token

Now open bot.php in your p**Private Repository** that you just made, and add your bot token in line 12.
Before - `$API_KEY = 'Your bot token'; //Your token`
After - `$API_KEY = '123456789:ABCDEFGHIJKLMNOPQRSUVWXYZ'; //Your token`
(That is a sample bot token, give the token you get from [@BotFather](https://t.me/BotFather) there!)

Now deploy your repository to heroku by clicking [here](https://heroku.com/deploy) or by going to `https://heroku.com/deploy?template=<ur git link>`

Now set the webhook by going to `https://api.telegram.org/bot<ur bot token>/setwebhook?url=<ur heroku link>/bot.php` (replace the words in <> with the required stuff, without those brackets.)

## HELP ME

For any type of help on deploy. Contact us on [INDUS CHATS](https://t.me/induschats).


##

**DO GIVE A STAR TO MY PROJECT TO SHOW YOUR SUPPORT!!**
